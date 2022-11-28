<?php
    session_start();
    require_once '../global.php';
    require_once '../model/pdo.php';
    require_once '../model/user.php';

    if(isset($_GET['login'])){
        if(isset($_SESSION['user'])){
            $url = SITE_URL;
            header("location: $url");  
            return ;      
        }
        if (isset($_POST['login'])) {
            $user_login = get_user_by_name($_POST['email']);   

            if (!($user_login)) {
                header ('location: index.php?login&error2=Bạn chưa đăng ký');
            } else{
                if(password_verify( $_POST['password'], $user_login['password'])){
                    $userLogin['id'] = $user_login['id']; 
                    $userLogin['name'] = $user_login['name'];
                    $userLogin['userName'] = $user_login['userName'];
                    $userLogin['address'] = $user_login['address'];
                    $userLogin['phone'] = $user_login['phone'];
                    $userLogin['is_Admin'] = $user_login['is_Admin'];

                    $_SESSION['user'] = $userLogin;
                   
                    $url = SITE_URL;
                    header ("location: $url");
                } else{
                    header ('location: index.php?login&error3=Sai mật khẩu');
                }
            }
        }
        $VIEW_AUTH = 'login.php';

    } elseif(isset($_GET['register'])){
        if (isset($_POST['register'])){
            if(strlen($_POST['password']) < 8){
                header('location: index.php?register&error1=Mật khẩu phải trên 8 ký tự');
                return ;
            }
            $user_db = get_user_by_name($_POST['email']);
            if($user_db) {
                header ('location: index.php?register&error4=Tài khoản này đã tồn tại!!');
            } else {
                add_user($_POST['name_user'], $_POST['phone_number'], $_POST['email'], password_hash($_POST['password'], PASSWORD_BCRYPT));
                $url = AUTH_BASE;
                header ("location: $url?login");
            }
        }
        $VIEW_AUTH = 'register.php';
    } elseif(isset($_GET['logout'])) {
        unset($_SESSION['user'] );
        $url = AUTH_BASE;
        header("location: $url?login");
    }

    
    include_once './layout.php';
?>