<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    if(isset($_GET['danh-muc'])){
        $VIEW_AD = './danh-muc/index.php';
    }
    else{
        $VIEW_AD = 'home.php';
    }

    include_once '../admin/layout.php';

?>
