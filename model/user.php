<?php

function get_user_by_name($name){
    $sql="SELECT * FROM users where userName = '$name'";
    return pdo_query_one($sql);
}

function add_user($name,$address,$phone,$email,$passWord,$gender,$image){
    // $sql="INSERT INTO users(name,address,phone,userName, passWord,is_Admin) VALUES ('$name','$address','$phone','$passWord','$is_Admin')";
    $sql="INSERT INTO `users`(`name`, `address`, `phone`,`userName`,`passWord`,`gender`, `image`) VALUES ('$name','$address','$phone','$email','$passWord', '$gender', '$image')";
    pdo_execute($sql);
}
function get_full_user(){
    $sql="SELECT * FROM users";
    return pdo_query_all($sql);
}
function get_user_Byid($id){
    $sql="SELECT * FROM users where id= $id";
    return pdo_query_one($sql);
}
function update_user($id,$name,$address,$phone,$userName,$isAdmin){
    $sql="UPDATE `users` SET `name`='".$name."',`address`='".$address."',`phone`='".$phone."',`userName`='".$userName."',`is_Admin`='".$isAdmin."' WHERE id=".$id;
    return pdo_execute($sql);
}

function update_profile($id, $name, $phone, $address, $userName, $gender, $image){
    $sql="UPDATE `users` SET `name`='".$name."',`address`='".$address."',`phone`='".$phone."',`userName`='".$userName."',`gender`='".$gender."', `image`='".$image."' WHERE id=".$id;
    return pdo_execute($sql);
}

?>
