<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    require_once './danh-muc/index.php\';

    if(isset($_GET['chi-tiet'])){
        $VIEW_NAME = 'chi-tiet.php';
    }elseif(isset($_GET['danh-muc'])){
        $VIEW_NAME = 'danh-muc.php';
    }else{
        $VIEW_NAME = 'trang-chu.php';
    }

    include_once './layout.php';

?>