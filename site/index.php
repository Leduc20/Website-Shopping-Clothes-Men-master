<?php
    require_once '../global.php';
    require_once '../model/pdo.php';

    if(isset($_GET['chi-tiet'])){
        $VIEW_NAME = 'chi-tiet.php';
    }
    elseif(isset($_GET['danh-muc'])){
        $VIEW_NAME = 'danh-muc.php';
    }
    elseif(isset($_GET['gio-hang'])){
        $VIEW_NAME = 'gio-hang.php';
    }else{
        $VIEW_NAME = 'trang-chu.php';
    }

    include_once './layout.php';
?>