<?php
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/danh_muc.php';
// include_once '../model/danh_muc.php';
$s
if (isset($_GET['danh-muc'])) {
    $show_dm=loadall_danh_muc();
    $VIEW_AD = './danh-muc/danh-sach.php';
} elseif (isset($_GET['add-danh-muc'])) {
    $VIEW_AD = './danh-muc/add-danh-muc.php';
} elseif (isset($_GET['add-dm'])) {
    if (isset($_POST['tenloai'])) {
        $name = $_POST['tenloai'];
        add_danh_muc($name);
    }
    $VIEW_AD = './danh-muc/add-danh-muc.php';
} elseif (isset($_GET['edit-danh-muc'])) {
    $VIEW_AD = '../danh-muc/edit-danh-muc.php';
} elseif (isset($_GET['san-pham'])) {
    $VIEW_AD = './san-pham/danh-sach.php';
} elseif (isset($_GET['add-san-pham'])) {
    $VIEW_AD = './san-pham/add-san-pham.php';
} elseif (isset($_GET['edit-danh-muc'])) {
    $VIEW_AD = '../danh-muc/edit-danh-muc.php';
} elseif (isset($_GET['khach-hang'])) {
    $VIEW_AD = './tai-khoan/danh-sach.php';
} elseif (isset($_GET['edit-tai-khoan'])) {
    $VIEW_AD = '../danh-muc/edit-danh-muc.php';
} elseif (isset($_GET['delete-tai-khoan'])) {
    $VIEW_AD = '../danh-muc/edit-danh-muc.php';
} else {
    $VIEW_AD = 'home.php';
}
// require_once './danh-muc/index.php';

include_once './layout.php';

?>
<img src="./danh-muc/da" alt="">