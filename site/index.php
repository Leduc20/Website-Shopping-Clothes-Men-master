<?php
ob_start();
session_start();
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/product.php';
require_once '../model/danh_muc.php';
require_once '../model/favorites.php';
require_once '../model/order.php';

if (isset($_GET['chi-tiet'])) {
    $product = getProductById($_GET['id']);

    $is_bought = !isset($_SESSION['user']) ? 'login' : (!!get_productId_bought_by_user_id($_SESSION['user']['id'], $_GET['id']) ? 'cmt' : 'watch');

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
        $user_id = $_SESSION['user']['id'];
        $orderId = add_order($user_id, $_POST['total'], $_POST['payment'])['id'];

        for ($i = 0; $i < count($_POST['prdId']); $i++) {
            add_order_detail($_POST['prdId'][$i], $orderId, $_POST['sl'][$i], $_POST['size'][$i], $_POST['color'][$i]);
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
    foreach ($orders as $key => $value) {
        $keyI = array_search($value['orderId'], array_column($results, 'orderId'));
        extract($value);
        if ($keyI === false) {
            $order = array(
                'orderId' => $orderId,
                'status' => $status,
                'totalMoney' => $totalMoney,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
                'products' => array(
                    [
                        "prdId" => $prdId,
                        'name' => $name,
                        'image' => $image,
                        'price' => $price,
                        'size' => $size,
                        'color' => $color,
                        'amount' => $amount
                    ],
                ),
            );
            array_push($results, $order);
        } else {
            array_push($results[$keyI]['products'], array(

                "prdId" => $prdId,
                'name' => $name,
                'image' => $image,
                'price' => $price,
                'size' => $size,
                'color' => $color,
                'amount' => $amount

            ));
        }
    }

    // echo "<pre>";
    // print_r($results);
    // echo "</pre>";

    // echo "<pre>";
    // print_r($orders);
    // echo "</pre>";

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

    $limit = 4;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $products = get_page($limit, $page);

    $VIEW_NAME = 'trang-chu.php';
}

include_once './layout.php';
