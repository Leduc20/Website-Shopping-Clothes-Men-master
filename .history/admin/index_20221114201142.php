<?php
    require_once '../global.php';
    require_once '../model/pdo.php';

    header('location: ' . ADMIN_BASE);

    // if(isset($_GET['danh-muc'])){
    //     $VIEW_AD = './danh-muc/danh-sach.php';
    // }
    // else{
    //     $VIEW_AD = 'home.php';
    // }
    // require_once './danh-muc/index.php';

    include_once '../layout.php';

?>
