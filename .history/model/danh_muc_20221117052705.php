<?php
function add_danh_muc($tenloai){
    $sql="INSERT INTO `groupproduct`(`name`) VALUES ('
    $tenloai')";
    pdo_execute($sql);
}
function loadall_danh_muc(){
    $sql="SELECT * FROM groupproduct";
    $show_dm=pdo_query_all($sql);
    return $show_dm;
}
function delete_danh_muc(){
    $sql="DELETE FROM `groupproduct` WHERE 0";
    pdo_execute($s)
}
?>