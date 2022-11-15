<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    if(isset($_GET['list-danh-muc'])){
        $VIEW_AD = './danh-muc';
    }
    else{
        $VIEW_AD = 'home.php';
    }

    include_once '../admin/layout.php';

?>
