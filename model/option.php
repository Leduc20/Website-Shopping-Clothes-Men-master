<?php
function add_size_product($size, $product_id)
{
   $sql = "INSERT INTO `option_size`(`product_id`,`size`) VALUES ('$product_id','$size')";
   return pdo_execute($sql);
}
function add_color_product($color, $product_id)
{
   $sql = "INSERT INTO `option_color`(`product_id`,`color`) VALUES ('$product_id','$color')";
   return pdo_execute($sql);
}
function getfullSize()
{
   $sql = "SELECT * FROM `option_size`";
   return pdo_query_all($sql);
}
function get_size_ID($id)
{
   $sql = "SELECT * FROM products p, option_size os where p.id=os.product_id and os.product_id=$id";
   return pdo_query_all($sql);
}
function getfullColor()
{
   $sql = "SELECT * FROM `option_color`";
   return pdo_query_all($sql);
}
function get_color_ID($id)
{
   $sql = "SELECT * FROM products p, option_color os where p.id=os.product_id and os.product_id=$id";
   return pdo_query_all($sql);
}
function delete_Size($id)
{
   // $sql = "DELETE * FROM `option_size` WHERE id=" . $id;
   $sql="DELETE FROM `option_size` where id=$id";
   pdo_execute($sql);
}
function delete_Color($id)
{
   // $sql = "DELETE * FROM `option_size` WHERE id=" . $id;
   $sql="DELETE FROM `option_color` where id=$id";
   pdo_execute($sql);
}
