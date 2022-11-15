<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    if(isset($_GET['list-danh-muc'])){
        $VIEW_ADMIN = './danh-muc/danh-sach.php';
    }
    else{
        $VIEW_aD = 'home.php';
    }

    include_once '../admin/layout.php';
?>
<img src="home.php" alt="">