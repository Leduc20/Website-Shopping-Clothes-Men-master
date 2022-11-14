<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    if(isset($_GET['list-danh-muc'])){
        $VIEW_NAME = './danh-muc/danh-sach.php';
        var_dump($VIEW_NAME);
    }
    else{
        $VIEW_NAME = '';
    }

    include_once '../admin/layout.php';
?>
<img src="./danh-muc/danh-sach.php" alt="">