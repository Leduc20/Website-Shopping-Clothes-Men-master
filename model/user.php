<?php

function get_user_by_name($name){
    $sql="SELECT * FROM user where userName = '$name'";

    return pdo_query_one($sql);
}

function add_user($name, $password){
    $sql="INSERT INTO user(userName, passWord) VALUES ('$name', '$password')";
    pdo_execute($sql);
}



?>
