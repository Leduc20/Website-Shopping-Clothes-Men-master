<?php

function get_all_comments_by_productId($product_id)
{
    $sql = "SELECT cmt.id, cmt.content, cmt.created_at, users.image, users.name FROM comments cmt INNER JOIN users ON cmt.user_id = users.id WHERE product_id = $product_id ORDER BY cmt.created_at DESC";
    return pdo_query_all($sql);
}

function add_comment($user_id, $product_id, $content)
{
    $sql = "INSERT INTO comments (user_id, product_id, content) VALUE ($user_id, $product_id, '$content')";
    return pdo_execute($sql);
}
