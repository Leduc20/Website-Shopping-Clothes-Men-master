<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    if(isset($_GET['list-danh-muc'])){
        $VIEW_AD = './danh-muc/danh-sach.php';
    }
    else{
        $VIEW_AD = 'home.php';
    }

    include_once '../admin/layout.php';
?>
<img src="home.php" alt="">