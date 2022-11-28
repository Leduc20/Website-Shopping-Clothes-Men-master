<?php

function get_user_by_name($name){
    $sql="SELECT * FROM users where userName = '$name'";
    return pdo_query_one($sql);
}

function add_user($name_user, $phone_number, $email, $password){
    $sql="INSERT INTO users(name, phone, userName, password) VALUES ('$name_user', '$phone_number', '$email', '$password')";
    pdo_execute($sql);
}

?>
