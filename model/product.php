<?php

function product_remove_by_cate_id($cate_id)
{
    $query = "delete from products where category_id = ?";
    dd($query, $cate_id);
    pdo_execute($query, $cate_id);
}
function getfullProducts()
{
    $sql = "select * from products";
    return pdo_query_all($sql);
}
function get_full_products()
{
    // $sql = "select * from products ORDER BY products.updated_at DESC";
    $sql = "select prd.id, prd.name, prd.image, prd.price,prd.groupProduct_Id, prd.amount,prd.detail, prd.created_at, fa.id as favorite_id, fa.user_id
    from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id  ORDER BY prd.created_at DESC";
    return pdo_query_all($sql);
}

function get_amount_product_byId($id)
{
    $sql = "SELECT amount FROM products WHERE id = $id";
    return pdo_query_one($sql);
}
function get_page($limit, $page)
{
    $skip = $limit * ($page - 1);
    // $sql = "select * from products ORDER BY products.updated_at DESC";
    $sql = "select prd.id, prd.name, prd.image, prd.price, prd.amount, prd.quantity_sold, prd.amount, prd.created_at, prd.groupProduct_Id, fa.id as favorite_id, fa.user_id
    from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id  ORDER BY prd.created_at DESC LIMIT $limit OFFSET $skip";
    return pdo_query_all($sql);
}
function get_products_bestseller()
{
    $sql = "select prd.id, prd.name, prd.image, prd.price, prd.amount, prd.quantity_sold, prd.amount, prd.created_at, prd.groupProduct_Id, fa.id as favorite_id, fa.user_id
    from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id where prd.quantity_sold > 10  ORDER BY prd.quantity_sold DESC LIMIT 10";
    return pdo_query_all($sql);
}

function get_products_by_category($category_id, $start, $end, $selling)
{
    $sql = "select prd.id, prd.name, prd.image, prd.price, prd.amount, prd.quantity_sold, prd.	amount, prd.created_at, prd.groupProduct_Id, fa.id as favorite_id, fa.user_id
    from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id  WHERE groupProduct_Id = $category_id  ORDER BY prd.created_at DESC";

    if ($start != '' & $end != '') {
        $sql = "select prd.id, prd.name, prd.image, prd.price, prd.amount, prd.quantity_sold, prd.	amount, prd.created_at, prd.groupProduct_Id, fa.id as favorite_id, fa.user_id
        from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id  WHERE groupProduct_Id = $category_id AND price <= $end AND  price>= $start  ORDER BY prd.created_at DESC";
    }

    if ($selling) {
        $sql = "select prd.id, prd.name, prd.image, prd.price, prd.amount, prd.quantity_sold, prd.	amount, prd.created_at, prd.groupProduct_Id, fa.id as favorite_id, fa.user_id
        from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id  WHERE groupProduct_Id = $category_id and prd.quantity_sold > 10 ORDER BY prd.quantity_sold DESC";
    }

    if ($start != '' && $end != '' && $selling) {
        $sql = "select prd.id, prd.name, prd.image, prd.price, prd.amount, prd.quantity_sold, prd.	amount, prd.created_at, prd.groupProduct_Id, fa.id as favorite_id, fa.user_id
        from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id  WHERE groupProduct_Id = $category_id AND price <= $end AND  price>= $start and prd.quantity_sold > 10  ORDER BY prd.quantity_sold DESC";
    }
    return pdo_query_all($sql);
}


function update_amount($quantity_sold, $id)
{
    $sql = "UPDATE products SET quantity_sold = quantity_sold + $quantity_sold, amount = amount - $quantity_sold WHERE id = $id";
    return pdo_execute($sql);
}

function get_productId_bought_by_user_id($user_id, $product_id)
{
    $sql = "SELECT od.product_id FROM orders JOIN order_details od ON orders.id = od.order_id WHERE orders.user_id = $user_id AND od.product_id = $product_id GROUP BY od.product_id";
    return pdo_query_one($sql);
}

function getProductById($id)
{
    $sql = "SELECT * FROM `products` WHERE  id = " . $id;
    return pdo_query_one($sql);
}


function insertProduct($name, $detail, $image, $price, $amount, $groupProduct_Id)
{
    $sql = "INSERT INTO `products`(`name`, `detail`, `image`, `price`, `amount`,`groupProduct_Id`) VALUES ('$name','$detail','$image','$price','$amount','$groupProduct_Id')";
    pdo_execute($sql);
}
function deleteProduct($id)
{
    $sql = "DELETE FROM `products` WHERE id=$id";
    pdo_execute($sql);
}
// function updateProduct($id, $name, $detail, $image, $price, $description, $groupProduct_Id)
// {
//     if ($image != "") {
//         $sql = "UPDATE `products` SET `name`='" . $name . "',`detail`='" . $detail . "',`image`='" . $image . "',`price`='" . $price . "',`description`='" . $description . "',`groupProduct_Id`='" . $groupProduct_Id . "' WHERE id =$id";
//     } else {
//         $sql = "UPDATE `products` SET `name`='" . $name . "',`detail`='" . $detail . "',`price`='" . $price . "',`description`='" . $description . "',`groupProduct_Id`='" . $groupProduct_Id . "' WHERE id =$id";
//     }

//     return pdo_execute($sql);
// }
function updateProduct($id, $name, $detail, $image, $price, $amount, $groupProduct_Id)
{
    if ($image != "") {
        $sql = "UPDATE `products` SET `name`='" . $name . "',`detail`='" . $detail . "',`image`='" . $image . "',`price`='" . $price . "',`amount`='" . $amount . "',`groupProduct_Id`='" . $groupProduct_Id . "' WHERE id=$id";
    } else {
        $sql = "UPDATE `products` SET `name`='" . $name . "',`detail`='" . $detail . "',`price`='" . $price . "',`amount`='" . $amount. "',`groupProduct_Id`='" . $groupProduct_Id . "' WHERE id=$id";
    }

    return pdo_execute($sql);
}

function searchProduct($search, $category, $start, $end)
{

    $sql =  "select prd.id, prd.name, prd.image, prd.price, prd.amount, prd.amount, prd.quantity_sold, fa.id as favorite_id, fa.user_id
    from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id WHERE prd.name LIKE '%$search%'";

    if ($category != '') {

        $sql = "SELECT prd.id, prd.name, prd.image, prd.price,  prd.amount, prd.quantity_sold, fa.id as favorite_id, fa.user_id

        from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id JOIN groupproduct cat ON prd.groupProduct_id = cat.id WHERE prd.name LIKE '%$search%' AND cat.name = '$category'";
    }
    if ($start != '' & $end != '') {

        $sql = "SELECT prd.id, prd.name, prd.image, prd.price,  prd.amount, prd.quantity_sold, fa.id as favorite_id, fa.user_id
        from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id WHERE prd.name LIKE '%$search%' AND price <= $end AND  price>= $start";
    }

    if ($category != '' & $start != ''  & $end != '') {
        $sql = "SELECT prd.id, prd.name, prd.image, prd.price,  prd.amount, prd.quantity_sold, fa.id as favorite_id, fa.user_id
        from products prd LEFT JOIN favorites fa ON fa.product_id = prd.id JOIN groupproduct cat ON prd.groupProduct_id = cat.id WHERE prd.name LIKE '%$search%' 

            AND cat.name = '$category' AND price <= $end AND  price>= $start";
    }

    return pdo_query_all($sql);


}
function get_full_size($id){
    $sql="SELECT * FROM option_size where product_id=$id";
    return pdo_query_all($sql);
}
function get_full_color($id){
    $sql="SELECT * FROM option_color where product_id=$id";
    return pdo_query_all($sql);
}
