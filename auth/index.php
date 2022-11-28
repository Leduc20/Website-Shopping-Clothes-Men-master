<?php
ob_start();
// error_reporting(0);
session_start();
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/user.php';



                $_SESSION['user'] = $userLogin;

                $url = SITE_URL;
                header("location: $url");
            } else {

            }
        }
    }
    $VIEW_AUTH = 'login.php';
} elseif (isset($_GET['register'])) {
    if (isset($_POST['register'])) {
        $name = $_POST['name_user'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone_number'];
        $password = $_POST['password'];
        if (strlen($_POST['password']) < 8) {
            header('location: index.php?register&error1=Mật khẩu phải trên 8 ký tự');
            return;
        }
        $user_db = get_user_by_name($email);
        if ($user_db) {
            header('location: index.php?register&error4=Tài khoản này đã tồn tại!!');
        } else {

            add_user($name, $address,$phone,$email,password_hash($password, PASSWORD_BCRYPT));
            $url = AUTH_BASE;
            header("location: $url?login");
        }
    }
    $VIEW_AUTH = 'register.php';
} elseif (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    $url = AUTH_BASE;
    header("location: $url?login");
}
include_once './layout.php';
