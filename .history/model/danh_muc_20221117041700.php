<?
function add_danh_muc($name){
    $sql="INSERT INTO `groupproduct`(`name`) VALUES ('$name')";
    pdo_execute($sql);
}
function loadall_danh_muc($id,$name){
    $sql="SELECT `id`, `name` FROM `groupproduct` WHERE ";
    pdo_query_all($sql);
}
?>