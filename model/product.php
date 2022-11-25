<?php

function product_remove_by_cate_id($cate_id){
    $query = "delete from products where category_id = ?";
    dd($query, $cate_id);
    pdo_execute($query, $cate_id);
}
function loadAll_san_pham(){
    $sql="SELECT * FROM product";;
    $list_san_pham=pdo_query_all($sql);
    return $list_san_pham;
}

?>