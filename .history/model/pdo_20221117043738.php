<?php
// const DBNAME = "webbanhang";
// const DBUSER = "root";
// const DBPASS = "";
// const DBCHARSET = "utf8";
// const DBHOST = "127.0.0.1";

// // tạo kết nối từ project php sang mysql
// function getConnect(){
//     try{
//     $connect = new PDO("mysql:host=" . DBHOST 
//                         . ";dbname=" . DBNAME 
//                         . ";charset=" . DBCHARSET,
//                         DBUSER,
//                         DBPASS
//             );
//     return $connect;
//         } catch(PDOException $e){
//             echo 'Lỗi'.$e->getMessage();
//         }
// }
function getConnect(){
    $server="localhost";
    $username="root";
    $password="";
    
    try {
        $conn=new PDO("mysql:host=$server;dbname=webbanhang",$username,$password);
        //set PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "Kết nối ok";
        return $conn;
    } catch (PDOException $e) {
        echo"lỗi".$e->getMessage();
    }
}



function pdo_query_all($query){
    $sql_args=array_slice(func_get_args(),1);
    try {
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $row=$stmt->fetchAll();
        return $row;
    } catch (PDOException $e) {
        throw $e;

    }
    finally{
        unset($conn);
    }

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