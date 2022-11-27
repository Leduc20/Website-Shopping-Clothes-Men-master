<?php
session_start();
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/product.php';
require_once '../model/order.php';

if (isset($_GET['chi-tiet'])) {
    $product = getProductById($_GET['id']);
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
            add_order_detail($_POST['prdId'][$i], $orderId, $_POST['sl'][$i]);
        }
        $url = SITE_URL;
        header("location: $url?purchase");
    }

    $VIEW_NAME = 'dat-hang.php';
} elseif (isset($_GET['purchase'])) {
    // if (!isset($_SESSION['user'])) {
        //     $url = AUTH_BASE;
    //     header("location: $url?login");
    //     return;
    // }
    $data=null;
    if(isset($_GET['type'])) {

    } else {

    }
   
    $VIEW_NAME = 'purchase.php';
} else {
    $products = getFullProducts();
    $VIEW_NAME = 'trang-chu.php';
}

include_once './layout.php';
