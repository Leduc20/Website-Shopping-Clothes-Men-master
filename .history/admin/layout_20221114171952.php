<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show_Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../icon/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
</head>

<body>
    <section class="bg-sky-600 py-3 px-2">
        <p class="text-center text-white text-[30px]">Quản Trị WEB</p>
        <div class="flex justify-end">
            <form action="">
                <span class="text-white text-[21px]">Cửa Hàng</span>
                <select name="" id="" class="border-[1px] w-[160px] rounded-[5px]">
                    <option value="">Cửa Hàng</option>
                    <option value="">A</option>
                    <option value="">b</option>
                    <option value="">c</option>
                </select>
            </form>
            <div class="dropdown ml-9 w-[250px]">
                <span class="btn btn-secondary dropdown-toggle w-[250px]" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    Xin Chào,<?php
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                    echo '<span class="">' . $name . '</span>';
                                }

                                ?>
                </span>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>Tài khoản</a></li>
                    <li><a class="dropdown-item" href="index.php?act=thoat"><i class="fa-solid fa-arrow-right-from-bracket"></i>Thoát</a></li>

                </ul>
            </div>
        </div>
    </section>
    <section class="flex px-2">
        <div class="w-[20%]">
            <ul>
                <li class="ml-[10px] py-3 ml-1 border-[1px] bg-slate-300 rounded-[3px] font-bold hover:bg-white">
                    <a class="no-underline text-black" href="../../Xshop-HT/"><i class="fa-solid fa-house"></i>Trở về Website</a>
                </li>
                <li class="ml-[10px] py-3 ml-1 border-[1px] bg-slate-300 rounded-[3px] font-bold hover:bg-white">
                    <a class="no-underline text-black" href="index.php"><i class="fa-solid fa-store"></i>Trang chủ</a>
                </li>
                <li class="ml-[10px] py-3 ml-1 border-[1px] bg-slate-300 rounded-[3px] font-bold hover:bg-white">
                    <a class="no-underline text-black" href="index.php?act=addlh"><i class="fa-solid fa-list"></i>Loại hàng</a>
                </li>
                <li class="ml-[10px] py-3 ml-1 border-[1px] bg-slate-300 rounded-[3px] font-bold hover:bg-white">
                    <a class="no-underline text-black" href="index.php?act=addhh"><i class="fa-solid fa-cart-shopping"></i>Hàng hóa</a>
                <li class="ml-[10px] py-3 ml-1 border-[1px] bg-slate-300 rounded-[3px] font-bold hover:bg-white">
                    <a class="no-underline text-black" href="index.php?act=addkh"><i class="fa-solid fa-users"></i>Khách hàng</a>
                </li>
                <li class="ml-[10px] py-3 ml-1 border-[1px] bg-slate-300 rounded-[3px] font-bold hover:bg-white">
                    <a class="no-underline text-black" href="index.php?act=dsbl"><i class="fa-solid fa-comments"></i>Bình luận</a>
                </li>
                <li class="ml-[10px] py-3 ml-1 border-[1px] bg-slate-300 rounded-[3px] font-bold hover:bg-white">
                    <a class="no-underline text-black" href="index.php?act=dstk"><i class="fa-solid fa-chart-simple"></i>Thống kê</a>
                </li>
            </ul>
        </div>
        <div class="w-[80%]">
            <!-- <div class="p-4">
                <h2 class="text-[22px] font-bold text-center py-3">Danh sách sản phẩm</h2>
            </div> -->
        </div>
    </section>

</body>

</html>