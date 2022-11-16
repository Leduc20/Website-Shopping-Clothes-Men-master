<?php
const DBNAME = "webbanhang";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

// tạo kết nối từ project php sang mysql
function getConnect(){
    try
    $connect = new PDO("mysql:host=" . DBHOST 
                        . ";dbname=" . DBNAME 
                        . ";charset=" . DBCHARSET,
                        DBUSER,
                        DBPASS
            );
    return $connect;
}



function pdo_query_all($query){
    // select * from users where email = ? or role_id = ?

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $data = $stmt->fetchAll();
    if(count($data) > 0){
        return $data;
    }

    return [];

}


function pdo_query_one($query){
    // select * from users where email = ? or role_id = ?

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $data = $stmt->fetch();
    if(count($data) > 0){
        return $data;
    }
    return null;

}


function pdo_execute_get_id($query){

    $args = func_get_args();
    $args = array_slice($args, 1);
    
    $conn = getConnect();
    
    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $lastId =  $conn->lastInsertId();
    return $lastId;
}


function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
?>