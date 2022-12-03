<?php

function product_remove_by_cate_id($cate_id)
{
    $query = "delete from products where category_id = ?";
    dd($query, $cate_id);
    pdo_execute($query, $cate_id);
}

function getFullProducts()
{
    $sql = "select * from products";
    return pdo_query_all($sql);
}

function getProductById($id)
{
    $sql = "SELECT * FROM `products` WHERE  id = ".$id;
    return pdo_query_one($sql);
}

function insertProduct($name, $detail, $image, $price, $date, $priceNew, $description,$groupProduct_Id)
{
    $sql = "INSERT INTO `products`(`name`, `detail`, `image`, `price`, `date`, `priceNew`, `description`,`groupProduct_Id`) VALUES ('$name','$detail','$image','$price','$date','$priceNew','$description','$groupProduct_Id')";
    pdo_execute($sql);
}
function deleteProduct($id){
    $sql="DELETE FROM `products` WHERE id=$id";
    pdo_execute($sql);
}
function updateProduct($id,$name,$detail,$image,$price,$date,$priceNew,$description,$groupProduct_Id){
    if($image!="" && $date!=""){
        $sql="UPDATE `products` SET `name`='".$name."',`detail`='".$detail."',`image`='".$image."',`price`='".$price."',`date`='".$date."',`priceNew`='".$priceNew."',`description`='".$description."',`groupProduct_Id`='".$groupProduct_Id."' WHERE id =$id";
    }else{
        $sql="UPDATE `products` SET `name`='".$name."',`detail`='".$detail."',`price`='".$price."',`date`='".$date."',`priceNew`='".$priceNew."',`description`='".$description."',`groupProduct_Id`='".$groupProduct_Id."' WHERE id =$id";
    }
    
    return pdo_execute($sql);
}

function get_full_favorites_by_userId($user_id) {
    $sql = "SELECT prd.name, prd.image, prd.price, prd.description FROM favorites JOIN products prd ON favorites.product_id = prd.id WHERE  user_id = $user_id";
    return pdo_query_all($sql);
}
