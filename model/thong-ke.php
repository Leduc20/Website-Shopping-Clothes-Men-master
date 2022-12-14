<?php
function load_thongkesanpham(){
    $sql = "select groupproduct.id as madm, groupproduct.name as tendm, count(products.id) as countsp, min(products.price) as minprice, max(products.price) as maxprice, avg(products.price) as avgprice";
    $sql.= " from products join groupproduct on groupproduct.id=products.groupProduct_Id";
    $sql.=" group by groupproduct.id order by groupproduct.id desc ";
    return pdo_query_all($sql);

    }
function load_thongkethunhap(){
    $sql="SELECT * FROM orders";
    $thunhap=pdo_query_all($sql);
    return $thunhap;
}
function trangthaithanhcong(){
    $sql="select count(orders.id) as sodh,id , status as stt from orders where status like '%giao hàng thành công%' GROUP BY status";
    return pdo_query_all($sql);
    
}
function trangthaidahuy(){
    $sql="select count(orders.id) as sodh,id , status as stt from orders where status like '%đã hủy đơn%' GROUP BY status";
    return pdo_query_all($sql);
    
}function trangthaigiaohang(){
    $sql="select count(orders.id) as sodh,id , status as stt from orders where status like '%đang giao hàng%' GROUP BY status";
    return pdo_query_all($sql);
    
}
function trangthaidangxuly(){
    $sql="select count(orders.id) as sodh,id , status as stt from orders where status like '%đang xử lý%' GROUP BY status";
    return pdo_query_all($sql);
    
}

?>