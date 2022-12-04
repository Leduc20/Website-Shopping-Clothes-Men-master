<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./src/img/favicon.png" />
    <title>Rani</title>
    <meta name="description" content="Free open source Tailwind CSS Store template" />
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic" />

    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="./src/font/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet" />
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> -->
    <script src="./src/js/jquery.js"></script>

    <style>
        .work-sans {
            font-family: "Work Sans", sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3 bg-white">
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="relative">
                            <a href="./product.html" @mouseover="open = true" class="flex items-center block p-2 rounded-md">
                                <p class="inline-block no-underline hover:text-black hover:underline py-2 px-4">
                                    Sản phẩm
                                    <span class="hidden lg:block float-right">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </span>
                                </p>
                            </a>
                            <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="absolute z-10 left-0 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 1
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 2
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 3
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 4
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="./contact.html">
                                Liên hệ
                            </a>
                        </li>
                        <li class="relative z-10">
                            <div id="open-search" type="button" data-modal-toggle="defaultModal" class="inline-block no-underline opacity-80 hover:opacity-100" href="#">
                                <svg class="fill-current pointer-events-none text-grey-darkest w-5 h-5 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2 uppercase">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl" href="<?= SITE_URL ?>">
                    <!-- <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg> -->
                    <img src="./src/img/logo_2.png" alt="" class="h-10 mx-2" />
                    rani
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center space-x-2" id="nav-content">
                <!--heart yeu thich-->
                <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="relative z-10">
                    <a href="<?= SITE_URL ?>?my-favorites&id=<?= isset($_SESSION['user']) ? $_SESSION['user']['id'] : null ?>" @mouseover="open = true" class="inline-block no-underline opacity-80 hover:opacity-100 font-bold" href="./pro_farvorite.html">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3783 5.88622C9.66902 4.10486 6.79049 4.0794 4.92308 5.90387C4.91717 5.90965 4.91116 5.91534 4.90506 5.92092C3.09331 7.58038 3.06654 10.3577 4.92308 12.1716L4.92796 12.1763L11.9374 19.1469L19.0769 12.1716C19.0828 12.1658 19.0888 12.1601 19.0949 12.1545C20.9067 10.495 20.9335 7.71772 19.0769 5.90387C17.2195 4.08919 14.3268 4.08919 12.4694 5.90387C12.3227 6.04722 12.125 6.12596 11.9202 6.12264C11.7154 6.11933 11.5204 6.03424 11.3783 5.88622ZM11.9465 4.31813C9.59468 2.40387 6.12292 2.58601 3.85838 4.79012C1.36802 7.08049 1.39686 10.8778 3.84702 13.2742C3.84785 13.275 3.84869 13.2759 3.84952 13.2767L11.391 20.7763C11.689 21.0727 12.1688 21.0748 12.4694 20.7811L20.1419 13.2851C22.6328 10.9939 22.603 7.19491 20.1505 4.79876C17.8724 2.57305 14.397 2.41284 11.9465 4.31813Z" fill="#030D45" />
                        </svg>
                    </a>

                    <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="absolute -right-1 top-8 w-72 mt-2 bg-white rounded-md shadow-xl">
                        <div class="absolute -top-5 right-2">
                            <i class="fa-solid fa-caret-up text-4xl text-gray-100"></i>
                        </div>
                        <div class="w-72 p-4 rounded-lg focus-within:shadow-lg bg-purple-100 overflow-hidden">
                            <!-- <ul>
                                <li class="border-b-2 border-purple-400 my-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <a href="" class="w-10/12">
                                            <div class="flex space-x-3">
                                                <div>
                                                    <img src="https://picsum.photos/200/300" alt="" class="w-12 h-12" />
                                                </div>
                                                <div class="w-8/12">
                                                    <div class="w-full flex-none text-xs flex items-center text-gray-600">
                                                    </div>
                                                    <div>
                                                        <h2 class="text-base mr-auto font-normal cursor-pointer text-black-100 hover:text-purple-500 truncate">
                                                            Lorem ipsum is placeholder text commonly used in the graphic
                                                        </h2>
                                                    </div>
                                                    <div class="text-xs text-black-600 mt-1">$240.00</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="text-red-500">
                                            <a href="">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="border-b-2 border-purple-400 my-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <a href="" class="w-10/12">
                                            <div class="flex space-x-3">
                                                <div>
                                                    <img src="https://picsum.photos/200/300" alt="" class="w-12 h-12" />
                                                </div>
                                                <div class="w-8/12">
                                                    <div class="w-full flex-none text-xs flex items-center text-gray-600">
                                                    </div>
                                                    <div>
                                                        <h2 class="text-base mr-auto font-normal cursor-pointer text-black-100 hover:text-purple-500 truncate">
                                                            Lorem ipsum is placeholder text commonly used in the graphic
                                                        </h2>
                                                    </div>
                                                    <div class="text-xs text-black-600 mt-1">$240.00</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="text-red-500">
                                            <a href="">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>    <li class="border-b-2 border-purple-400 my-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <a href="" class="w-10/12">
                                            <div class="flex space-x-3">
                                                <div>
                                                    <img src="https://picsum.photos/200/300" alt="" class="w-12 h-12" />
                                                </div>
                                                <div class="w-8/12">
                                                    <div class="w-full flex-none text-xs flex items-center text-gray-600">
                                                    </div>
                                                    <div>
                                                        <h2 class="text-base mr-auto font-normal cursor-pointer text-black-100 hover:text-purple-500 truncate">
                                                            Lorem ipsum is placeholder text commonly used in the graphic
                                                        </h2>
                                                    </div>
                                                    <div class="text-xs text-black-600 mt-1">$240.00</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="text-red-500">
                                            <a href="">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                            Sản phẩm yêu thích của tôi
                            <a href="<?= SITE_URL ?>?my-favorites" @mouseover="open = true" class="inline-block no-underline opacity-80 hover:opacity-100 font-bold" href="./pro_farvorite.html">
                                Xem sản phẩm
                            </a>
                        </div>
                    </div>
                </div>
                <!-- User -->
                <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="relative z-10">
                    <a @mouseover="open = true" class="inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <circle fill="none" cx="12" cy="7" r="3" />
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                        </svg>
                    </a>
                    <!-- chưa đăng nhập -> show cái này -->

                    <?php if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    ?>
                        <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="absolute inset-x-2/4 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl">
                            <?php
                            if ($is_Admin == 1) { ?>
                                <a href="<?= ADMIN_BASE ?>" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Vào trang quản trị
                                </a>
                            <?php } ?>
                            <a href="./profile.html" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                Thông tin cá nhân
                            </a>
                            <a href="<?= SITE_URL . "?purchase" ?>" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                Đơn hàng
                            </a>
                            <a href="<?= AUTH_BASE . "?logout" ?>" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                Đăng xuất
                            </a>
                        </div>

                    <?php } else { ?>
                        <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="absolute right-0 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl">
                            <a href="<?= AUTH_BASE . "?login" ?>" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                Đăng nhập
                            </a>
                            <a href="<?= AUTH_BASE . "?register" ?>" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                Đăng ký
                            </a>
                        </div>


                        <?php
                        // echo var_dump($_SESSION['user']);
                        ?>
                    <?php } ?>
                </div>
                <!-- Cart -->
                <div>
                    <a class="inline-block no-underline hover:text-black relative" href="<?= SITE_URL ?>?gio-hang ">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
                            <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                            <circle cx="10.5" cy="18.5" r="1.5" />
                            <circle cx="17.5" cy="18.5" r="1.5" />
                        </svg>
                        <span class="cart-count absolute right-0 top-0 rounded-full bg-red-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-sm leading-tight text-center">
                            0
                        </span>
                    </a>
                </div>
    </nav>
    <!--  -->
    <main>
        <?php if (isset($VIEW_NAME)) include_once $VIEW_NAME ?>
    </main>
    <!--  -->
    <section>
        <footer class="text-center lg:text-left bg-gray-100 text-gray-600">
            <div class="flex justify-center items-center lg:justify-center p-6 border-b border-gray-300">
                <div class="hidden lg:block">
                    <form action="">
                        <div class="grid md:grid-cols-3 gird-cols-1 gap-4 flex justify-center items-center">
                            <div class="md:ml-auto">
                                <p class="">
                                    <strong>Đăng ký nhận khuyến mãi</strong>
                                </p>
                            </div>

                            <div class="">
                                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Email của bạn" required />
                            </div>

                            <div class="md:mr-auto">
                                <button type="submit" name="btn-subnews" class="bg-black inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-60 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                    Đăng ký
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mx-6 py-10 text-center md:text-left pl-10">
                <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-5 gap-">
                    <div class="">
                        <h6 class="uppercase font-semibold mb-4 flex items-center justify-center md:justify-start">
                            <img src="./src/img/logo_2.png" alt="" class="h-6 mx-2" />
                            Rani Fashion
                        </h6>
                        <p class="pr-10">
                            Chúng tôi rất hân hạnh khi đã được phục vụ quý khách và mang đến
                            cho quý khách những sản phẩm tốt nhất. Rất cảm ơn quý khách!
                        </p>
                    </div>
                    <div class="uppercase">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            chính sách
                        </h6>
                        <p class="mb-4">
                            <a href="#!" class="text-sm text-gray-600">Chính sách mua hàng</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-sm text-gray-600">Chính sách đổi trả</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-sm text-gray-600">Hình thức vận chuyển</a>
                        </p>
                        <p>
                            <a href="#!" class="text-sm text-gray-600">Chính sách thanh toán</a>
                        </p>
                    </div>
                    <div class="uppercase">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            hướng dẫn
                        </h6>
                        <p class="mb-4">
                            <a href="#!" class="text-sm text-gray-600">hướng dẫn mua hàng</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-sm text-gray-600">GIAO NHẬN VÀ THANH TOÁN</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-sm text-gray-600">ĐỔI TRẢ VÀ BẢO HÀNH</a>
                        </p>
                        <p>
                            <a href="#!" class="text-sm text-gray-600">Tra cứu</a>
                        </p>
                    </div>
                    <div class="">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            Liên hệ
                        </h6>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                                </path>
                            </svg>
                            Hà Nội
                        </p>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                </path>
                            </svg>
                            rani@gmail.com
                        </p>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                </path>
                            </svg>
                            + 01 234 567 88
                        </p>
                        <p class="flex items-center justify-center md:justify-start">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print" class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z">
                                </path>
                            </svg>
                            + 01 234 567 89
                        </p>
                    </div>
                    <div class="">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            Mạng xã hội
                        </h6>
                        <p class="mb-4 flex space-x-3">
                            <a href="#!" class="text-gray-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="w-2.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#!" class="text-gray-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#!" class="text-gray-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                                    <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#!" class="text-gray-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#!" class="text-gray-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#!" class="text-gray-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                    </path>
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center p-2 bg-gray-200">
                <span>© 2022 Copyright:</span>
                <a class="text-gray-600 font-semibold" href="#">RANI</a>
            </div>
        </footer>
    </section>


    <!--  -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed hidden top-10 left-0 right-0 z-50  w-full p-4 overflow-x-hidden overflow-y-auto  h-modal md:h-full" style="align-items: flex-start !important;">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal body -->
                <form id="form-search" action="<?= SITE_URL ?>?search&" method="GET">
                    <div class="relative px-4 flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <div class="mt-2 grid place-items-center h-full w-12 text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="hidden" class="" name="search">
                        <input id="search-value" class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" autocomplete="off" placeholder="Tìm kiếm sản phẩm . . ." name="q" />
                        <button id="remove-search" class="hidden mr-4 btn inline-block hover:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
                            X
                        </button>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                <!-- Modal footer -->
                <div class="pt-4 pb-6 px-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <div role="status" class="flex ">
                        <div class="">
                            <svg id="loading" class="hidden inline mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-purple-600" viewBox="0 0 100 101" fill="red" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                            </svg>

                            <svg id="loaded" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <span class="ml-4">Tìm kiếm sản phẩm: <span id="search" class=""></span></span>
                    </div>
                    <div id="results" class="mt-3">


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./src/js/flowbite.js"></script>
    <script type="module">
        import {
            cartCount,
            carts,

        } from "./src/js/global.js";
        const formSearch = document.getElementById('form-search');
        const btnSearch = document.getElementById('btn-search');
        const searchEl = document.getElementById('search-value')
        const loading = document.getElementById("loading")
        const loaded = document.getElementById("loaded")
        $(document).ready(function() {
            $("#open-search").click(() => {
                $("#search-value").val(() => '').focus()
            });

            function debounce(func, timeout = 300) {
                let timer;
                return (...args) => {
                    clearTimeout(timer);
                    timer = setTimeout(() => {
                        func.apply(this, args);
                    }, timeout);
                };
            }

            $("#remove-search").click(function() {
                $("#search-value").val(() => '').focus()
                $("#remove-search").addClass("hidden")
                $('#results').html('')
            })

            function handleSearch() {
                $("#search").text(() => searchEl.value)
                $("#remove-search").removeClass("hidden")
                loading.classList.remove("hidden")
                loaded.classList.add("hidden")

                $.ajax({
                    url: "handleAjax.php?search",
                    type: 'get',
                    // dataType: 'html',
                    data: {
                        q: searchEl.value
                    }
                }).done(function(results) {
                    loading.classList.add("hidden")
                    loaded.classList.remove("hidden")
                    $('#results').html(results)
                })
            }
            const processChange = debounce(() => handleSearch(), 600);

            searchEl.onkeyup = () => {
                processChange();
            }
            cartCount.innerHTML = carts.length
        })
    </script>

</body>

</html>