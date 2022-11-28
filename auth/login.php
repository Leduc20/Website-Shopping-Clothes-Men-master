
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./src/img/favicon.png" />
    <title>Rani</title>
    <meta name="description" content="Free open source Tailwind CSS Store template" />
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic" />

    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="./src/font/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet" />

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
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true"
                            class="relative">
                            <a href="./product.html" @mouseover="open = true"
                                class="flex items-center block p-2 rounded-md">
                                <p class="inline-block no-underline hover:text-black hover:underline py-2 px-4">
                                    Sản phẩm
                                    <span class="hidden lg:block float-right">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </span>
                                </p>
                            </a>
                            <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                                class="absolute z-10 left-0 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 1
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 2
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 3
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 4
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="./contact.html">
                                Liên hệ
                            </a>
                        </li>
                        <li x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true"
                            class="relative z-10">
                            <a @mouseover="open = true" class="inline-block no-underline opacity-80 hover:opacity-100"
                                href="#">
                                <svg class="fill-current pointer-events-none text-grey-darkest w-5 h-5 inline"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                            </a>

                            <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                                class="absolute left-6 -top-5 w-72 mt-2 bg-white rounded-md shadow-xl">
                                <div
                                    class="relative pl-4 flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                                    <!-- <div class="grid place-items-center h-full w-12 text-gray-300">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </button>
                                    </div> -->

                                    <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                                        type="text" id="search" placeholder="Tìm kiếm sản phẩm . . ." />
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2 uppercase">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl"
                    href="index.html">
                    <!-- <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg> -->
                    <img src="./src/img/logo_2.png" alt="" class="h-10 mx-2" />
                    rani
                </a>


            <div class="order-2 md:order-3 flex items-center space-x-2" id="nav-content">
                <!--heart yeu thich-->
                <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="relative z-10">
                    <a @mouseover="open = true" class="inline-block no-underline opacity-80 hover:opacity-100 font-bold"
                        href="./pro_farvorite.html">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.3783 5.88622C9.66902 4.10486 6.79049 4.0794 4.92308 5.90387C4.91717 5.90965 4.91116 5.91534 4.90506 5.92092C3.09331 7.58038 3.06654 10.3577 4.92308 12.1716L4.92796 12.1763L11.9374 19.1469L19.0769 12.1716C19.0828 12.1658 19.0888 12.1601 19.0949 12.1545C20.9067 10.495 20.9335 7.71772 19.0769 5.90387C17.2195 4.08919 14.3268 4.08919 12.4694 5.90387C12.3227 6.04722 12.125 6.12596 11.9202 6.12264C11.7154 6.11933 11.5204 6.03424 11.3783 5.88622ZM11.9465 4.31813C9.59468 2.40387 6.12292 2.58601 3.85838 4.79012C1.36802 7.08049 1.39686 10.8778 3.84702 13.2742C3.84785 13.275 3.84869 13.2759 3.84952 13.2767L11.391 20.7763C11.689 21.0727 12.1688 21.0748 12.4694 20.7811L20.1419 13.2851C22.6328 10.9939 22.603 7.19491 20.1505 4.79876C17.8724 2.57305 14.397 2.41284 11.9465 4.31813Z"
                                fill="#030D45" />
                        </svg>
                    </a>

                    <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                        class="absolute -right-1 top-8 w-72 mt-2 bg-white rounded-md shadow-xl">
                        <div class="absolute -top-5 right-2">
                            <i class="fa-solid fa-caret-up text-4xl text-gray-100"></i>
                        </div>
                        <div class="w-72 p-4 rounded-lg focus-within:shadow-lg bg-purple-100 overflow-hidden">
                            <ul>
                                <li class="border-b-2 border-purple-400 my-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <a href="" class="w-10/12">
                                            <div class="flex space-x-3">
                                                <div>
                                                    <img src="https://picsum.photos/200/300" alt="" class="w-12 h-12" />
                                                </div>
                                                <div class="w-8/12">
                                                    <div
                                                        class="w-full flex-none text-xs flex items-center text-gray-600">
                                                    </div>
                                                    <div>
                                                        <h2
                                                            class="text-base mr-auto font-normal cursor-pointer text-black-100 hover:text-purple-500 truncate">
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
                                                    <div
                                                        class="w-full flex-none text-xs flex items-center text-gray-600">
                                                    </div>
                                                    <div>
                                                        <h2
                                                            class="text-base mr-auto font-normal cursor-pointer text-black-100 hover:text-purple-500 truncate">
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
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- User -->
                <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="relative z-10">
                    <a @mouseover="open = true" class="inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="32"
                            height="32" viewBox="0 0 24 24">
                            <circle fill="none" cx="12" cy="7" r="3" />
                            <path
                                d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                        </svg>
                    </a>
                    <!-- chưa đăng nhập -> show cái này -->
                    <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                        class="absolute right-0 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                            Đăng nhập
                        </a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                            Đăng ký
                        </a>
                    </div>

                    <!-- đăng nhập rồi -> show cái này -->

                    <!-- <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                        class="absolute inset-x-2/4 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl">
                        //nếu đăng nhập admin -> vào trang quản trị
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                Vào trang quản trị
                            </a>
                        // nếu đăng nhập user -> không vào trang quản trị
                        <a href="./profile.html"
                            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                            Thông tin cá nhân
                        </a>
                        <a href="./profile.html"
                            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                            Đơn hàng
                        </a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                            Đăng xuất
                        </a>
                    </div> -->
                </div>

                <!-- Cart -->
                <div>
                    <a class="inline-block no-underline hover:text-black relative" href="cart.html">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="34"
                            height="34" viewBox="0 0 24 24">
                            <path
                                d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                            <circle cx="10.5" cy="18.5" r="1.5" />
                            <circle cx="17.5" cy="18.5" r="1.5" />
                        </svg>
                        <span
                            class="absolute right-0 top-0 rounded-full bg-red-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-sm leading-tight text-center">
                            5
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!--  -->
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex justify-center px-6 py-24 mx-auto">
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Đăng nhập vào tài khoản của bạn
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="<?= AUTH_BASE ?>?login" method="POST">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email của bạn</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="email@gmail.com" required="">
                                <?php if(isset($_GET['error2']))  echo "Tài khoản và mật khẩu sai"?>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mật khẩu</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   required="">
                                <?php if(isset($_GET['error3']))  echo "Mật khẩu sai"?>
                            </div>
                            <div class="flex items-center justify-between"> 
                                <a href="#"
                                    class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Quên mật khẩu?</a>
                            </div>
                            <button type="submit" name="login"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Đăng nhập</button>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                Bạn chưa có tài khoản? <a href="<?= AUTH_BASE ?>?register"
                                    class="font-semibold text-primary-600 hover:underline dark:text-primary-500">Đăng ký</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <!--  -->
</body>

</html>
