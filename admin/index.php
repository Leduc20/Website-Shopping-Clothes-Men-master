<?php
ob_start();
session_start();
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/danh_muc.php';
require_once '../model/product.php';
require_once '../model/user.php';
require_once '../model/option.php';
require_once '../model/order.php';
require_once '../model/thong-ke.php';
require_once '../model/comment.php';
// include_once '../model/danh_muc.php';
// $show_error=getConnect();
// echo $show_error;
// $getFull_pro=getProductById($id);
if (!isset($_SESSION['user']) && !$_SESSION['user']['is_Admin']) {
    $url = AUTH_BASE;
    header("location: $url?login");
    exit();
}
if (isset($_GET['danh-muc'])) {
    $show_dm = loadall_danh_muc();
    $VIEW_AD = './danh-muc/danh-sach.php';
} elseif (isset($_GET['add-danh-muc'])) {
    if (isset($_POST['themmoi'])) {
        $tenloai = $_POST['tenloai'];
        $image = $_FILES['image']['name'];
        // var_dump($_POST);
        $folder = "../upload/";
        $targerupload = $folder . basename($_FILES['image']['name']);
        $targetupload = $folder . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {
        } else {
        }
        add_danh_muc($tenloai,$image);
        $categori = "Thêm danh mục thành công";
    }
    $VIEW_AD = './danh-muc/add-danh-muc.php';
} elseif (isset($_GET['delete'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete_danh_muc($id);
        $categori = "Xóa danh mục thành công";
    }

    $show_dm = loadall_danh_muc();
    $VIEW_AD = './danh-muc/danh-sach.php';
} elseif (isset($_GET['edit'])) {
    if (isset($_GET['id'])) {
        $edit = loadone_danh_muc($_GET['id']);
    }
    $sql = "SELECT * FROM `groupproduct` order by id desc";
    $edit_dm = pdo_query_one($sql);
    $VIEW_AD = './danh-muc/edit-danh-muc.php';
} elseif (isset($_GET['update'])) {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        // $image=$_POST['image'];
        $image = $_FILES['image']['name'];
        //upload ảnh
        $folder = "../upload/";
        $targetupload = $folder . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {
            update_danh_muc($id, $name,$image);
        } else {
            update_danh_muc($id, $name,'');
        }
        $categori = "Cập nhật danh mục thành công";
    }
    $show_dm = loadall_danh_muc();
    $VIEW_AD = './danh-muc/danh-sach.php';
} elseif (isset($_GET['san-pham'])) {
    $list_pro = get_full_products();
    $VIEW_AD = './san-pham/danh-sach.php';
} elseif (isset($_GET['add-san-pham'])) {
    if (isset($_POST['add-san-pham'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        // $priceNew = $_POST['sale'];
        $detail = $_POST['detail'];
        $amount = $_POST['amount'];
        // $date = $_POST['date'];
        $image = $_FILES['image']['name'];
        $groupProduct_Id = $_POST['groupProduct_Id'];
        //upload ảnh
        $folder = "../upload/";
        $targerupload = $folder . basename($_FILES['image']['name']);
        $targetupload = $folder . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {
        } else {
        }
        insertProduct($name, $detail, $image, $price, $amount, $groupProduct_Id);
        $product_tb = "Thêm sản phẩm thành công";
    }
    $show_dm = loadall_danh_muc();
    $VIEW_AD = './san-pham/add-san-pham.php';
} elseif (isset($_GET['delete-sanpham'])) {
    if (isset($_GET['id'])) {
        $id_pro = $_GET['id'];
        deleteProduct($id_pro);
        $product_tb = "Xóa sản phẩm thành công";
    }
    $list_pro = get_full_products();
    $VIEW_AD = './san-pham/danh-sach.php';
} elseif (isset($_GET['edit-sanpham'])) {
    if (isset($_GET['id'])) {
        $getFull_pro = getProductById($_GET['id']);
    }
    $show_dm = loadall_danh_muc();
    $VIEW_AD = './san-pham/edit-san-pham.php';
} elseif (isset($_GET['update-pro'])) {
    if (isset($_POST['update-pro'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $amount = $_POST['amount'];
        $image = $_FILES['image']['name'];
        $groupProduct_Id = $_POST['groupProduct_Id'];
        //upload ảnh
        $folder = "../upload/";
        $targetupload = $folder . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {

            updateProduct($id, $name, $detail, $image, $price, $amount, $groupProduct_Id);
        } else {
            updateProduct($id, $name, $detail, '', $price, $amount, $groupProduct_Id);
        }
        $product_tb = "Cập nhật sản phẩm thành công";
    }
    $list_pro = get_full_products();
    $show_dm = loadall_danh_muc();
    $VIEW_AD = './san-pham/danh-sach.php';
} elseif (isset($_GET['danhsach_size'])) {
    if (isset($_GET['id'])) {
    }
    $list_pro = get_full_products();
    $list_size_ID = get_size_ID($_GET['id']);
    $VIEW_AD = './san-pham/danhsach_size.php';
} elseif (isset($_GET['add_size'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['add_size'])) {
            $size = $_POST['size'];
            add_size_product($size, $id);
            $size_tb = "Thêm size thành công";
        }
    }
    $list_pro = get_full_products();
    $list_size_ID = get_size_ID($id);
    $VIEW_AD = './san-pham/edit_size.php';
} elseif (isset($_GET['delete-size'])) {
    if (isset($_GET['id_size'])) {
        // $id_size = $_GET['id'];
        delete_Size($_GET['id_size']);
        $size_tb = "Xóa size thành công";
    }
    $list_size = getfullSize();
    foreach ($list_size as $show) {
        extract($show);
        if (isset($product_id)) {
            $list_size_ID = get_size_ID($product_id);
        }
        $size_tb = "Xóa size thành công";
    }
    $VIEW_AD = './san-pham/danhsach_size.php';
} elseif (isset($_GET['danhsach_color'])) {
    if (isset($_GET['id'])) {
        $list_pro = get_full_products();
        $list_color_ID = get_color_ID($_GET['id']);
    }
    $VIEW_AD = './san-pham/danhsach_color.php';
} elseif (isset($_GET['add_color'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['add_color'])) {
            $color = $_POST['color'];
            add_color_product($color, $id);
            $color_tb = "Thêm color thành công";
        }
    }
    $list_pro = get_full_products();
    $list_color_ID = get_color_ID($id);
    $VIEW_AD = './san-pham/edit_color.php';
} elseif (isset($_GET['delete-color'])) {
    if (isset($_GET['id_color'])) {
        // $id_size = $_GET['id'];
        delete_Color($_GET['id_color']);
        $color_tb = "Xóa color thành công";
    }
    $list_size = getfullColor();
    foreach ($list_size as $show) {
        extract($show);
        if (isset($product_id)) {
            $list_color_ID = get_color_ID($product_id);
        }
        $size_tb = "Xóa color thành công";
    }
    $VIEW_AD = './san-pham/danhsach_color.php';
} elseif (isset($_GET['danh-sach-user'])) {
    $list_user = get_full_user();
    $VIEW_AD = './tai-khoan/danh-sach.php';
} elseif (isset($_GET['edit-tai-khoan'])) {
    if (isset($_GET['id'])) {
        $list_user = get_user_Byid($_GET['id']);
        $tb_user = "Cập nhật tài khoản thành công";
    }
    $VIEW_AD = './tai-khoan/edit-tai-khoan.php';
} elseif (isset($_GET['delete_user'])) {
    if (isset($_GET['id'])) {
        delete_user($_GET['id']);
        $tb_user = "Xóa tài khoản thành công";
    }
    $list_user = get_full_user();
    $VIEW_AD = './tai-khoan/danh-sach.php';
} elseif (isset($_GET['update-tai-khoan'])) {
    if (isset($_POST['update-tai-khoan'])) {
        $id = $_POST['id'];
        $userName = $_POST['userName'];
        $address = $_POST['address'];
        // $passWord=$_POST['passWord'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $role = $_POST['role'];
        $update_user = update_user($id, $name, $address, $phone, $userName, $role);
        $tb_user = "Cập nhật tài khoản thành công";
    }
    $list_user = get_full_user();
    $VIEW_AD = './tai-khoan/danh-sach.php';
} elseif (isset($_GET['don-hang'])) {
    $list_order = getfullOrder();
    $VIEW_AD = './quan-ly-bill/bill.php';
} elseif (isset($_GET['detail_bill'])) {
    if (isset($_GET['id'])) {
        $list_bill_detail = getorderDetails($_GET['id']);
    }
    // var_dump($list_bill_detail);
    $VIEW_AD = './quan-ly-bill/bill_details.php';
} elseif (isset($_GET['update_stt'])) {
    // var_dump($_GET['id']);
    // $id = $_GET['id'];
    if (isset($_POST['update_status'])) {
        $id = $_POST['id'];
        // var_dump($id);
        $status = $_POST['order_status'];
        updateStatus($id, $status);
    }

    $getfullOrder = getfullOrder();
    foreach ($getfullOrder as $show) {
        # code...
        extract($show);
        $list_bill_detail = getorderDetails($id);
    }
    $list_order = getfullOrder();
    // var_dump($id, $status);
    $VIEW_AD = './quan-ly-bill/bill.php';
} elseif (isset($_GET['thong-ke'])) {
    $listsanpham = load_thongkesanpham();
    $thunhap = load_thongkethunhap();
    $dhthanhcong = trangthaithanhcong();
    $dhdangxuly = trangthaidangxuly();
    $dhhuy = trangthaidahuy();
    $dhdanggiao = trangthaigiaohang();

    $VIEW_AD = './thong-ke/thong-ke.php';
} elseif (isset($_GET['list-comment'])) {
    $get_comments = get_full_comments();
    $VIEW_AD = './comment/list-comment.php';
} elseif (isset($_GET['delete_cmt'])) {
    if (isset($_GET['id'])) {
        delete_cmt($_GET['id']);
        $tb_cmt = "Xóa thành công comment!";
    }
    $get_comments = get_full_comments();
    $VIEW_AD = './comment/list-comment.php';
} else {

    $VIEW_AD = 'home.php';
}

$show_user = get_full_user();



// require_once './danh-muc/    index.php';

include_once './layout.php';
?>
<img src="../auth/login.php" alt="">