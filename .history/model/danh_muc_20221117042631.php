<?php
function add_danh_muc($name){
    $sql="INSERT INTO `groupproduct`(`name`) VALUES ('$name')";
    pdo_execute($sql);
}
function loadall_danh_muc(){
    $sql="SELECT  FROM `groupproduct` WHERE by `id` desc";
    pdo_query_all($sql);
}
?>