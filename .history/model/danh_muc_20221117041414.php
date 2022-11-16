<?
function add_danh_muc($name){
    $sql="INSERT INTO `groupproduct`(`name`) VALUES ('$name')";
    pdo_execute($sql);
}
function show_danh_muc(){
    $sql="SELECT `id`, `name` FROM `groupproduct` WHERE ";
    pd
}
?>