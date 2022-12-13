<?php
ob_start();
session_start();
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/product.php';
require_once '../model/danh_muc.php';
require_once '../model/favorites.php';
require_once '../model/order.php';
require_once '../vnpay_php/config.php';

if (isset($_GET['chi-tiet'])) {
    $product = getProductById($_GET['id']);

    $is_bought = !isset($_SESSION['user']) ? 'login' : (!!get_productId_bought_by_user_id($_SESSION['user']['id'], $_GET['id']) ? 'cmt' : 'watch');
    var_dump($is_bought);

    $VIEW_NAME = 'chi-tiet.php';
} elseif (isset($_GET['danh-muc'])) {
    $VIEW_NAME = 'danh-muc.php';
} elseif (isset($_GET['gio-hang'])) {
    $VIEW_NAME = 'gio-hang.php';
} elseif (isset($_GET['dat-hang'])) {
    if (!isset($_SESSION['user'])) {
        $url = AUTH_BASE;
        header("location: $url?login");
        return;
    }
    if (count($_POST) == 0) {
        $url = SITE_URL;
        header("location: $url?gio-hang");
        return;
    }
    if (isset($_POST['dat-hang'])) {
        $code_order = rand(0, 9999);
        // var_dump($vnp_TxnRef);
        $cart_payment = $_POST['payment'];
        if ($cart_payment == 'tienmat') {
            $user_id = $_SESSION['user']['id'];
            $orderId = add_order($user_id, $_POST['total'], $_POST['payment'])['id'];

            for ($i = 0; $i < count($_POST['prdId']); $i++) {
                add_order_detail($_POST['prdId'][$i], $orderId, $_POST['sl'][$i], $_POST['size'][$i], $_POST['color'][$i]);
            }
        } elseif ($cart_payment == 'vnpay') {
            $vnp_TxnRef = $code_order; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY

            $vnp_OrderInfo = 'Thanh toán đơn hàng';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $_POST['total'] * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

            $vnp_ExpireDate = $expire;

            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
                "vnp_ExpireDate" => $vnp_ExpireDate,

            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            // }

            //var_dump($inputData);
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array(
                'code' => '00', 'message' => 'success', 'data' => $vnp_Url
            );
            if (isset($_POST['dat-hang'])) {
                $_SESSION['code_cart']=$code_order;
                $user_id = $_SESSION['user']['id'];
                $orderId = add_order($user_id, $_POST['total'], $_POST['payment'])['id'];

                for ($i = 0; $i < count($_POST['prdId']); $i++) {
                    add_order_detail($_POST['prdId'][$i], $orderId, $_POST['sl'][$i], $_POST['size'][$i], $_POST['color'][$i]);
                }
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
            
        }
        $url = SITE_URL;
        header("location: $url?purchase");
    }
    $VIEW_NAME = 'dat-hang.php';
} elseif (isset($_GET['purchase'])) {
    if (!isset($_SESSION['user'])) {
        $url = AUTH_BASE;
        header("location: $url?login");
        return;
    }

    if (isset($_POST['huy-prd'])) {
        update_order_by_id($_POST['order_id']);
        $url = SITE_URL;
        header("location: $url?purchase");
        return;
    }

    $orders = [];

    if (isset($_GET['type'])) {
        $orders = get_orders_by_userId($_SESSION['user']['id'], $_GET['type']);
    } else {
        $orders = get_orders_by_userId($_SESSION['user']['id'], 'all');
    }

    $results = [];

    $VIEW_NAME = 'purchase.php';
} elseif (isset($_GET['search'])) {
    if (!isset($_GET['q'])) {
        $url = SITE_URL;
        header("location: $url");
        return;
    }
    $keyWord = $_GET['q'];
    $category = empty($_GET['category']) ? '' : $_GET['category'];
    $start = empty($_GET['start']) ? '' : $_GET['start'];
    $end = empty($_GET['end']) ? '' : $_GET['end'];

    $categories = get_full_categories();
    $products = searchProduct($keyWord, $category, $start, $end);
    $VIEW_NAME = 'search.php';
} elseif (isset($_GET['my-favorites'])) {
    if (!isset($_SESSION['user'])) {
        $url = AUTH_BASE;
        header("location: $url?login");
        return;
    }

    if (isset($_POST['remove-favorite'])) {
        remove_favorite_by_productId($_POST['product_id']);
    }
    $products = get_full_favorites_by_userId($_SESSION['user']['id']);
    $VIEW_NAME = 'my-favorites.php';
} else {
    $products = get_full_products();
    $limit = 4;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $products = get_page($limit, $page);

    $VIEW_NAME = 'trang-chu.php';
}

include_once './layout.php';
