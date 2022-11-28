<?php
function category_remove_by_id($cate_id){
    $query = "delete from categories where id = ?";
    pdo_execute($query, $cate_id);
}

?>