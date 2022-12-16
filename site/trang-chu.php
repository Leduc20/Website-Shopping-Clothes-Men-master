<!-- banner, slide -->

<div class="carousel relative -z-10 container mx-auto" style="max-width: 1600px">
    <div id="default-carousel" class="relative" data-carousel="">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out " data-carousel-item>
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="
              background-image: url('https://affiliate.f88.vn/banner_refferal_mobile.png');
            ">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Về nhà(cái) thôi ae</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="
              background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');
            ">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="
              background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');
            ">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-20 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
<!-- danh mục -->
<div class="mx-auto">
<div class="px-6 pt-16 sm:pt-24 mx-auto">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 text-center">DANH MỤC SẢN PHẨM</h2>

    <div class="mt-6 p-2 grid grid-cols-3 gap-y-10 gap-x-6 sm:grid-cols-6 lg:grid-cols-10 xl:gap-x-5">
        <?php foreach ($categories as $key => $value) : ?>
            <a href="<?= SITE_URL ?>?category=<?= str_replace(' ', '-', $value['name']) ?>&id=<?= $value['id'] ?>" class="group relative bg-gray-200 rounded-md">
                <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:aspect-none flex items-center justify-center">
                    <img src="../upload/<?= $value['image'] ?>" alt=" <?= $value['name'] ?>" class="mt-4 h-16 w-16 lg:h-24 lg:w-24 rounded-full object-cover object-center">
                </div>
                <div class="text-base my-3 flex items-center justify-center px-2">
                    <?= $value['name'] ?>
                </div>
            </a>
        <?php endforeach ?>

        <!-- More products... -->
    </div>
</div>
</div>

<!-- Sản phẩm best seller -->
<section class="bg-white pt-12">
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <div id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">
                <h3 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                    SẢN PHẨM BEST SELLER
                    <div class="h-1 w-full bg-indigo-500 rounded"></div>
                </h3>
            </div>
        </div>
        <!-- show product -->
        <!--  -->

        <div id="user-id" class="mt-4 grid grid-cols-3 lg:grid-cols-5 gap-10 px-6" data-userId="<?= isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null' ?>">
            <?php foreach ($productBestSl as $key => $value) : ?>
                
                    <div class="relative max-w-md w-full bg-gray-100 shadow-lg rounded-xl p-5">
                        <div class="absolute top-0 left-0 z-10 bg-red-500 rounded-l-lg px-2 text-white">
                            Bán chạy
                        </div>
                        <div class="relative">
                            <div action="<?= SITE_URL ?>" method="POST">
                                <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="absolute flex flex-col top-0 right-0 p-3">
                                    <button id="btn-fav" type="submit" data-favId="<?= $value['favorite_id'] ?>" data-prdId="<?= $value['id'] ?>" value=" <?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? $value['favorite_id'] : $value['id'] ?>" name="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'remove_fav' : 'add_fav' ?>" class="btn-fav transition ease-in duration-300 bg-white hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="tymPrd h-6 w-6" fill="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'red' : 'none' ?>" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>

                                    <button id="poper-fav" x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="p-2 absolute top-10 right-4 w-32 mt-2 bg-white rounded-md shadow-xl">
                                        <?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'Xóa khỏi sản phẩm yêu thích' : 'Thêm vào list sản phẩm yêu thích' ?>
                                    </button>
                                </div>
                            </div>

                            <a href="<?= SITE_URL ?>?chi-tiet&id=<?= $value['id'] ?>">
                                <div class=" h-56 mb-3">
                                    <img src=" <?= BASE_URL . "upload/" . $value['image'] ?>" alt="Just a flower" class="h-full w-full object-fill rounded-2xl" />
                                </div>
                                <div class="flex-auto justify-evenly">
                                    <div class="flex flex-wrap">
                                        <div class="w-full flex-none text-sm flex items-center text-gray-600"></div>
                                        <div class="flex items-center w-full justify-between min-w-0">
                                            <h2 class="text-xl mr-auto font-medium cursor-pointer text-black-100 hover:text-purple-500 truncate">
                                                <?= $value['name'] ?>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="mt-1 flex items-center justify-between">
                                        <span class="text-base text-yellow-600 font-normal"><?= number_format($value['price']) ?> VNĐ</span>
                                        <span class="text-xs text-black-400">Đã bán: <?= $value['quantity_sold'] ?></span>
                                    </div>

                                    <div class="flex space-x-2 text-sm font-medium justify-start my-3">
                                        <button class="w-full transition ease-in duration-300 inline-flex items-center justify-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600">
                                            <span>Xem chi tiết</span>
                                        </button>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!--  -->
<section class="bg-white py-12">
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <div id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">
                <h3 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                    SẢN PHẨM MỚI NHẤT
                    <div class="h-1 w-full bg-indigo-500 rounded"></div>
                </h3>
            </div>
        </div>
        <!-- show product -->
        <!--  -->
        <div id="user-id" class="mt-4 grid grid-cols-3 lg:grid-cols-5 gap-10 px-6" data-userId="<?= isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null' ?>">
            <?php foreach ($products as $key => $value) : ?>

                <div class="max-w-md w-full bg-gray-100 shadow-lg rounded-xl p-5">
                    <div class="relative">
                        <div action="<?= SITE_URL ?>" method="POST">
                            <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="absolute flex flex-col top-0 right-0 p-3">
                                <button id="btn-fav" type="submit" data-favId="<?= $value['favorite_id'] ?>" data-prdId="<?= $value['id'] ?>" value=" <?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? $value['favorite_id'] : $value['id'] ?>" name="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'remove_fav' : 'add_fav' ?>" class="btn-fav transition ease-in duration-300 bg-white hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="tymPrd h-6 w-6" fill="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'red' : 'none' ?>" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>

                                <button id="poper-fav" x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="p-2 absolute top-10 right-4 w-32 mt-2 bg-white rounded-md shadow-xl">
                                    <?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'Xóa khỏi sản phẩm yêu thích' : 'Thêm vào list sản phẩm yêu thích' ?>
                                </button>
                            </div>
                        </div>

                        <a href="<?= SITE_URL ?>?chi-tiet&id=<?= $value['id'] ?>">
                            <div class=" h-56 mb-3">
                                <img src=" <?= BASE_URL . "upload/" . $value['image'] ?>" alt="Just a flower" class="h-full w-full object-fill rounded-2xl" />
                            </div>
                            <div class="flex-auto justify-evenly">
                                <div class="flex flex-wrap">
                                    <div class="w-full flex-none text-sm flex items-center text-gray-600"></div>
                                    <div class="flex items-center w-full justify-between min-w-0">
                                        <h2 class="text-xl mr-auto font-medium cursor-pointer text-black-100 hover:text-purple-500 truncate">
                                            <?= $value['name'] ?>
                                        </h2>
                                    </div>
                                </div>
                                <div class="mt-1 flex items-center justify-between">
                                    <span class="text-base text-yellow-600 font-normal"><?= number_format($value['price']) ?> VNĐ</span>
                                    <span class="text-xs text-black-400">Đã bán: <?= $value['quantity_sold'] ?></span>
                                </div>

                                <div class="flex space-x-2 text-sm font-medium justify-start my-3">
                                    <button class="w-full transition ease-in duration-300 inline-flex items-center justify-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600">
                                        <span>Xem chi tiết</span>
                                    </button>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <nav aria-label="Page navigation example" class="flex justify-center">
        <ul class="inline-flex items-center -space-x-px">
            <li>
                <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Previous</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= SITE_URL ?>?page=1" class="<?php if (!isset($_GET['page']) || $_GET['page'] == 1) echo "text-blue-600 bg-blue-50" ?> px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="<?= SITE_URL ?>?page=2" class="<?php if (isset($_GET['page']) && $_GET['page'] == 2) echo "text-blue-600 bg-blue-50" ?> px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="<?= SITE_URL ?>?page=3" aria-current="page" class="<?php if (isset($_GET['page']) && $_GET['page'] == 3) echo "text-blue-600 bg-blue-50" ?> z-10 px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
            </li>
            <li>
                <a href="<?= SITE_URL ?>?page=4" class="<?php if (isset($_GET['page']) && $_GET['page'] == 4) echo "text-blue-600 bg-blue-50" ?> px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="<?= SITE_URL ?>?page=5" class="<?php if (isset($_GET['page']) && $_GET['page'] == 5) echo "text-blue-600 bg-blue-50" ?>px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Next</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>


</section>


<div id="toast-fav" style="transform: translateX(-50%);" class="hidden z-50 fixed top-0 left-2/4 -translate-x-2/4 flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div id="toast-conten-fav" class="ml-3 text-sm font-normal"></div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </button>
</div>

<script type="module">
    import {
        handleFavourite
    } from "./src/js/global.js"
    const toast = document.getElementById('toast-fav');
    const toastContetn = document.getElementById('toast-conten-fav');
    const btnFavs = document.querySelectorAll('.btn-fav')

    $(document).ready(function() {

        handleFavourite(btnFavs, toast, toastContetn);
    })
    // console.log(btnFavs)
</script>