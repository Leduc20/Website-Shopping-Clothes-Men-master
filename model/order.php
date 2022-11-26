<?php

function add_order($user_id, $total)
{
    $sql = "INSERT INTO orders(user_id, totalMoney) value ($user_id, '$total')";
    pdo_execute($sql);
}

function getOrderByUserId($user_id){
    $sql = "SELECT * FROM orders WHERE user_id = $user_id";
    return pdo_query_one($sql);
}
