<?php
    require_once '../global.php';
    require_once '../model/pdo.php';
    re
    if(isset($_GET['danh-muc'])){
        $VIEW_AD = './danh-muc/index.php';
    }
    else{
        $VIEW_AD = 'home.php';
    }
    // require_once '../admin/danh-muc/index.php';

    include_once '../admin/layout.php';

?>
