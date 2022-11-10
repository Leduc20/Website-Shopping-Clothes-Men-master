<?php

require_once '../../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/category_dao.php';
if(isset($_GET['tao-moi'])){
    $VIEW_NAME = 'tao-form.php';
}elseif(isset($_GET['sua'])){
    $id = $_GET['id'];
    $VIEW_NAME = 'sua-form.php';
}elseif(isset($_GET['xoa'])){
    require_once '../../dao/product_dao.php';
    $id = $_GET['id'];
    product_remove_by_cate_id($id);
    category_remove_by_id($id);
    header('location: ' . ADMIN_BASE . '/danh-muc/index.php');
    die;
    // thực hiện hành động xoá
    // điều hướng về danh sách
}else{
    $VIEW_NAME = 'danh-sach.php';
}

include_once '../layout.php';

?>