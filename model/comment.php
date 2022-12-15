<?php
function get_full_comments(){
    $sql="SELECT cmt.id, cmt.content, cmt.created_at, prd.name as name_p, u.name as name_u FROM products prd INNER JOIN comments cmt ON prd.id = cmt.product_id INNER JOIN users u ON cmt.user_id=u.id
    ";
    return pdo_query_all($sql);
}
function delete_cmt($id){
    $sql="DELETE FROM comments WHERE id=$id";
    return pdo_execute($sql);
}
function get_all_comments_by_productId($product_id)
{
    $sql = "SELECT cmt.id, cmt.content, cmt.created_at, users.image, users.userName FROM comments cmt INNER JOIN users ON cmt.user_id = users.id WHERE product_id = $product_id ORDER BY cmt.created_at DESC";
    return pdo_query_all($sql);
}

function add_comment($user_id, $product_id, $content)
{
    $sql = "INSERT INTO comments (user_id, product_id, content) VALUE ($user_id, $product_id, '$content')";
    return pdo_execute($sql);
}
