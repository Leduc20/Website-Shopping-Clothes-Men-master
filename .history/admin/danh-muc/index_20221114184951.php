<?php

require_once '../../global.php';
require_once '../../model/pdo.php';
require_once '../../model/category_dao.php';
if(isset($_GET['add-danh-muc'])){
    $VIEW_AD = '../danh-muc/add-danh-muc.php';
}elseif(isset($_GET['edit-danh-muc'])){
    $VIEW_AD = './danh-muc/edit-danh-muc.php';
}
else{
    $VIEW_AD = 'danh-sach.php';
}



// if(isset($_GET['tao-moi'])){
//     $VIEW_NAME = 'tao-form.php';
// }elseif(isset($_GET['sua'])){
//     $id = $_GET['id'];
//     $VIEW_NAME = 'sua-form.php';
// }elseif(isset($_GET['xoa'])){
//     require_once '../../dao/product_dao.php';
//     $id = $_GET['id'];
//     product_remove_by_cate_id($id);
//     category_remove_by_id($id);
//     header('location: ' . ADMIN_BASE . '/danh-muc/index.php');
//     die;
//     // thực hiện hành động xoá
//     // điều hướng về danh sách
// }else{
//     $VIEW_NAME = 'danh-sach.php';
// }
?>
<img src="danh-sach.php" alt="">