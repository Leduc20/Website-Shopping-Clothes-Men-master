<?php

function add_order($user_id, $total)
{
    $sql = "INSERT INTO orders(user_id, totalMoney) value ($user_id, '$total')";
     pdo_execute($sql);
     return pdo_query_one('SELECT MAX(id) as id FROM orders'); 
}

function getOrderByUserId($user_id)
{
    $sql = "SELECT * FROM orders WHERE user_id = $user_id";
    return pdo_query_one($sql);
}

function add_order_detail($product_id, $order_id, $amount)
{
    $sql = "INSERT INTO order_details(product_id, order_id, amount) value ($product_id, $order_id, $amount)";
    pdo_execute($sql);
}
