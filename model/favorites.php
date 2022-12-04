<?php
function get_full_favorites_by_userId($user_id)
{
    $sql = "SELECT prd.id, prd.name, prd.image, prd.price, prd.description FROM favorites JOIN products prd ON favorites.product_id = prd.id WHERE  user_id = $user_id";
    return pdo_query_all($sql);
}

function add__favorite($product_id, $user_id)
{
    $sql = "INSERT INTO favorites (product_id, user_id) VALUE ($product_id, $user_id)";
    return pdo_execute($sql);
}

function remove_favorite_by_favoriteId($id)
{
    $sql = "DELETE FROM favorites WHERE id = $id";
    return pdo_execute($sql);
}

function remove_favorite_by_productId($product_id)
{
    $sql = "DELETE FROM favorites WHERE product_id = $product_id";
    return pdo_execute($sql);
}
