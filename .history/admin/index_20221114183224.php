<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    if(isset($_GET['list-danh-muc'])){
        $VIEW_AD = './danh-muc/danh-sach.php';
    }elseif(isset($_GET['add-danh-muc'])){
        $VIEW_AD = './danh-muc/add-danh-muc.php';
    }elseif(isset($_GET['add-danh-muc'])){
        $VIEW_AD = './danh-muc/add-danh-muc.php';
    }
    else{
        $VIEW_AD = 'home.php';
    }

    include_once '../admin/layout.php';
?>
<img src="home.php" alt="">