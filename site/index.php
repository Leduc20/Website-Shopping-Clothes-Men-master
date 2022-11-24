<?php
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/product_dao.php';

if (isset($_GET['chi-tiet'])) {
    $product = getProductById($_GET['id']);
    $VIEW_NAME = 'chi-tiet.php';
} elseif (isset($_GET['danh-muc'])) {
    $VIEW_NAME = 'danh-muc.php';
} elseif (isset($_GET['gio-hang'])) {
    $VIEW_NAME = 'gio-hang.php';
} else {
    $products = getFullProducts();
    $VIEW_NAME = 'trang-chu.php';
}

include_once './layout.php';
