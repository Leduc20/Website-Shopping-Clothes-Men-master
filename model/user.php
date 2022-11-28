<?php

function get_user_by_name($name){
    $sql="SELECT * FROM users where userName = '$name'";
    return pdo_query_one($sql);
}


?>
