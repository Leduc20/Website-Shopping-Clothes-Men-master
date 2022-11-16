<?php
function add_danh_muc($name){
    $sql="INSERT INTO `groupproduct`(`name``) VALUES ('
    4na')";
    pdo_execute($sql);
}
function loadall_danh_muc(){
    $sql="SELECT * FROM groupproduct";
    $show_dm=pdo_query_all($sql);
    return $show_dm;
}
?>