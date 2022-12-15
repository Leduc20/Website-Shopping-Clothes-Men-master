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
// include_once '../model/danh_muc.php';
// $show_error=getConnect();
// echo $show_error;
// $getFull_pro=getProductById($id);

if (isset($_GET['danh-muc'])) {
    $show_dm = loadall_danh_muc();
    $VIEW_AD = './danh-muc/danh-sach.php';
} elseif (isset($_GET['add-danh-muc'])) {
    if (isset($_POST['themmoi'])) {
        $tenloai = $_POST['tenloai'];
        add_danh_muc($tenloai);
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
    $sql = "SELECT * FROM `categories` order by id desc";
    $edit_dm = pdo_query_one($sql);
    $VIEW_AD = './danh-muc/edit-danh-muc.php';
} elseif (isset($_GET['update'])) {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        update_danh_muc($id, $name);
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
        $category_id = $_POST['category_id'];
        //upload ảnh
        $folder = "../upload/";
        $targerupload = $folder . basename($_FILES['image']['name']);
        $targetupload = $folder . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {
        } else {
        }
        insertProduct($name, $detail, $image, $price, $amount, $category_id);
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
        $category_id = $_POST['category_id'];
        //upload ảnh
        $folder = "../upload/";
        $targetupload = $folder . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetupload)) {

            updateProduct($id, $name, $detail, $image, $price, $amount, $category_id);
        } else {
            updateProduct($id, $name, $detail, '', $price, $amount, $category_id);
        }
        $product_tb = "Cập nhật sản phẩm thành công";
    }
    $list_pro = get_full_products();
    $show_dm = loadall_danh_muc();
    $VIEW_AD = './san-pham/danh-sach.php';
} elseif (isset($_GET['add_size'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['add_size'])) {
            $size = $_POST['size'];
            add_size_product($size, $id);
        }
        $size_tb = "Thêm size thành công";
    }
    $list_pro = get_full_products();
    $list_size_ID = get_size_ID($id);
    $VIEW_AD = './san-pham/edit_size.php';
} elseif (isset($_GET['delete-size'])) {
    if (isset($_GET['id_size'])) {
        // $id_size = $_GET['id'];
        delete_Size($_GET['id_size']);
    }
    $list_size = getfullSize();
    foreach ($list_size as $show) {
        extract($show);
        if (isset($product_id)) {
            $list_size_ID = get_size_ID($product_id);
        }
        $size_tb = "Xóa size thành công";
    }
    $VIEW_AD = './san-pham/edit_size.php';
} elseif (isset($_GET['add_color'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['add_color'])) {
            $color = $_POST['color'];
            add_color_product($color, $id);
        }
        $size_tb = "Thêm color thành công";
    }
    $list_color_ID = get_color_ID($id);
    $VIEW_AD = './san-pham/edit_color.php';
} elseif (isset($_GET['delete-color'])) {
    if (isset($_GET['id_color'])) {
        // $id_size = $_GET['id'];
        delete_Color($_GET['id_color']);
    }
    $list_size = getfullColor();
    foreach ($list_size as $show) {
        extract($show);
        if (isset($product_id)) {
            $list_color_ID = get_color_ID($product_id);
        }
        $size_tb = "Xóa color thành công";
    }
    $VIEW_AD = './san-pham/edit_color.php';
} elseif (isset($_GET['danh-sach-user'])) {
    $list_user = get_full_user();
    $VIEW_AD = './tai-khoan/danh-sach.php';
} elseif (isset($_GET['edit-tai-khoan'])) {
    if (isset($_GET['id'])) {
        $list_user = get_user_Byid($_GET['id']);
    }
    $VIEW_AD = './tai-khoan/edit-tai-khoan.php';
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
} else {
    $VIEW_AD = 'home.php';
}

$show_user = get_full_user();



// require_once './danh-muc/    index.php';

include_once './layout.php';
