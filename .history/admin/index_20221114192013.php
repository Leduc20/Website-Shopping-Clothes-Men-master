<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    if(isset($_GET['danh-muc'])){
        $VIEW_AD = './danh-muc/danhsach.php';
    }
    else{
        $VIEW_AD = 'home.php';
    }
    // require_once '../admin/danh-muc/index.php';

    include_once '../admin/layout.php';

?>
