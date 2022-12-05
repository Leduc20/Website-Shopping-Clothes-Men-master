<?php
ob_start();
// error_reporting(0);
session_start();
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/user.php';

if (isset($_GET['login'])) {
    if (isset($_SESSION['user'])) {
        $url = SITE_URL;
        header("location: $url");
        return;
    }
    if (isset($_POST['login'])) {
        // var_dump($_POST);
        $user_login = get_user_by_name($_POST['email']);
        if (!($user_login)) {
            header('location: index.php?login&error2=Bạn chưa đăng ký');
        } else {
            if (password_verify($_POST['password'], $user_login['password'])) {
                $userLogin['id'] = $user_login['id'];
                $userLogin['name'] = $user_login['name'];
                $userLogin['address'] = $user_login['address'];
                $userLogin['phone'] = $user_login['phone'];
                $userLogin['userName'] = $user_login['userName'];
                $userLogin['address'] = $user_login['address'];
                $userLogin['email'] = $user_login['email'];
                $userLogin['password'] = $user_login['password'];
                $userLogin['is_Admin'] = $user_login['is_Admin'];
                $_SESSION['user'] = $userLogin;

                $url = SITE_URL;
                header("location: $url");
            } else {
                header('location: index.php?login&error3=Sai mật khẩu');
            }
        }
    }
    $VIEW_AUTH = 'login.php';
} elseif (isset($_GET['register'])) {
    if (isset($_POST['register'])) {
        $name = $_POST['name_user'];

        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $image = $_FILES['image']['name'];
        // $groupProduct_Id=$_POST['groupProduct_Id'];
        //upload ảnh
        $folder = "../upload/";
        $targerupload = $folder . basename($_FILES['image']['name']);
        $targetupload = $folder . basename($_FILES['image']['name']);

        $email = $_POST['email'];
        $password = $_POST['password'];
        if (strlen($_POST['password']) < 8) {
            header('location: index.php?register&error1=Mật khẩu phải trên 8 ký tự');
            return;
        }
        $user_db = get_user_by_name($email);
        if ($user_db) {
            header('location: index.php?register&error4=Tài khoản này đã tồn tại!!');

        } else {  
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {
                add_user($name,$address,$phone,$email,password_hash($password, PASSWORD_BCRYPT),$gender,$image);
                $url = AUTH_BASE;
                header("location: $url?login");
            }
        } 
    }
    $VIEW_AUTH = 'register.php';
} elseif (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    $url = AUTH_BASE;
    header("location: $url?login");
} elseif (isset($_GET['profile'])){


    if (!isset($_SESSION['user']['id'])) {
        $url = AUTH_BASE;
        header("location: $url");
        return;
    }
    $id = $_SESSION['user']['id'];

    if(isset($_POST['btn_submit'])){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $userName = $_POST['userName'];
        $image = $_FILES['image']['name'];
        // $groupProduct_Id=$_POST['groupProduct_Id'];
        //upload ảnh
        $folder = "../upload/";
        $targerupload = $folder . basename($_FILES['image']['name']);
        $targetupload = $folder . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {
            update_profile($id, $name, $phone, $address, $userName, $gender, $image);
        }

    }

    $user = get_user_Byid($id);
    
    $VIEW_AUTH = 'profile.php';

}

include_once './layout.php';
?>
