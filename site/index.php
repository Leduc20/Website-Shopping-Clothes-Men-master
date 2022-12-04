<?php
ob_start();
session_start();
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/product.php';
require_once '../model/favorites.php';
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
        if (!in_array($value['orderId'], $results)) {
            // $results[$key]['orderId'] = $value['orderId'];

            // $results[$key]['status'] = $value['status'];
            // $results[$key]['totalMoney'] = $value['totalMoney'];
            var_dump(in_array($value['orderId'], $results));
        }
        // var_dump($value['orderId']);
    }

    var_dump($results);

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

    $categories = ['0' => ['name' => 'nike'], '1' => ['name' => 'gui chi']];
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
    if (isset($_POST['add_fav'])) {
        add__favorite($_POST['prd_id'], $_SESSION['user']['id']);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
    if (isset($_POST['remove_fav'])) {
        remove_favorite_by_favoriteId($_POST['fav_id']);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
    $products = get_full_products();
    $VIEW_NAME = 'trang-chu.php';
}

include_once './layout.php';
