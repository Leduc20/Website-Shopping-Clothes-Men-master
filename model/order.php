<?php

function add_order($user_id, $total, $payment)
{
    $sql = "INSERT INTO orders(user_id, totalMoney, payment) value ($user_id, '$total', '$payment')";
    pdo_execute($sql);
    return pdo_query_one('SELECT MAX(id) as id FROM orders');
}

function getOrderByUserId($user_id)
{
    $sql = "SELECT * FROM orders WHERE user_id = $user_id";
    return pdo_query_one($sql);
}

function add_order_detail($product_id, $order_id, $amount, $size, $color)
{
    $sql = "INSERT INTO order_details(order_id, product_id, size, color, amount) value ($order_id, $product_id, '$size', '$color', $amount)";
    pdo_execute($sql);
}

function get_orders_by_userId($user_id, $type)
{

    function sql($user_id, $type)
    {
        if ($type) return "SELECT prd.id AS prdId, prd.name, prd.image, prd.price, odt.size, odt.color, odt.amount, od.id, od.status, od.totalMoney
    FROM products prd JOIN order_details odt ON prd.id = odt.product_id
    JOIN orders od ON od.id = odt.order_id WHERE od.user_id = $user_id AND od.status= '$type' ORDER BY od.create_at DESC";

        return "SELECT prd.id AS prdId, prd.name, prd.image, prd.price, odt.size, odt.color, odt.amount, od.id, od.status, od.totalMoney
    FROM products prd JOIN order_details odt ON prd.id = odt.product_id
    JOIN orders od ON od.id = odt.order_id WHERE od.user_id = $user_id  ORDER BY od.create_at DESC";
    }
    if ($type == 'wait')  return pdo_query_all(sql($user_id, "chờ xác nhận"));
    if ($type == "done") return pdo_query_all(sql($user_id, "giao hàng thành công"));
    if ($type == "shipping") return pdo_query_all(sql($user_id, "đang giao hàng"));
    if ($type == "cancel") return pdo_query_all(sql($user_id, "đã hủy"));
    return pdo_query_all(sql($user_id, null));
}
