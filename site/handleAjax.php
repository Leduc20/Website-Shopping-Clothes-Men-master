<?php
session_start();
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/product.php';
require_once '../model/favorites.php';
require_once '../model/comment.php';

if (isset($_GET['search'])) {
    $products = searchProduct($_GET['q'], '', '', '');
    if (count($products) == 0) echo '<p>Không có sản phẩm tìm thấy</p>';
    foreach ($products as $key => $value) {
?>
        <a href="<?= SITE_URL ?>?chi-tiet&id=<?= $value['id'] ?>" class="p-2 rounded-md flex mt-2 hover:bg-red-300">
            <img class="w-12 h-12 " src="<?= UPLOAD_BASE . $value['image'] ?>" alt="">
            <p class="ml-4"><?= $value['name'] ?></p>
        </a>
<?php
    }
} ?>

<?php
if (isset($_GET['favourite'])) {

    if ($_POST['type'] == "add_fav") {
        $res = add__favorite($_POST['prdId'], $_SESSION['user']['id']);
        echo $res['id'];
    }
    if ($_POST['type'] == 'remove_fav') {
        remove_favorite_by_favoriteId($_POST['favId']);
    }
}

if (isset($_GET['comment'])) {
    if (isset($_GET['product_id'])) {
        $cmts = get_all_comments_by_productId($_GET['product_id']);
?>

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Tất cả bình luận (<?= count($cmts) ?>)</h2>
        </div>
        <?php
        if (count($cmts) == 0) echo '<p>Chưa có bình luận. Hãy mua hàng và cho chúng tôi biết cảm nhận của bạn</p>';
        foreach ($cmts as $key => $value) {
        ?>
            <article class="p-4 mb-4 text-base bg-white rounded-lg dark:bg-gray-900 border ">
                <footer class="flex justify-between items-center mb-2">
                    <div class="">
                        <div class="flex">
                            <div class="avt">
                                <img class="mr-2 w-9 h-9 rounded-full" src="<?= $value['image'] ?>" alt="">
                            </div>
                            <div class="">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-md text-gray-900 dark:text-white">
                                        <?= $value['userName'] ?>
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <time class="text-sm"><?= $value['created_at'] ?></time>
                                    </p>
                                </div>
                                <!-- <div class="flex items-center ">
                                <svg aria-hidden="true" class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>First star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Second star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Third star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Fourth star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-3 h-3 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Fifth star</title>
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </footer>

                <p class="text-gray-500 dark:text-gray-400"><?= $value['content'] ?></p>
            </article>
<?php
        }
    }


    if (isset($_POST['content']) && $_POST['content'] != "") {
        add_comment($_SESSION['user']['id'], $_POST['product_id'], $_POST['content']);
    }
} ?>

<?php

if (isset($_GET['filter'])) {
    $selling = isset($_GET['selling']) ?  $_GET['selling'] : null;
    $products = get_products_by_category($_GET['id'], $_GET['smallPrice'], $_GET['bigPrice'],$selling);
    if (count($products) == 0) { ?>

        <p class="absolute left-2/4 top-1/4">Không có kết quả lọc phù hợp <a href="" class="text-red-500">Xóa bộ lọc</a></p>

    <?php } ?>
    <?php
    foreach ($products as $key => $value) {
    ?>

        <div class="max-w-md w-full bg-gray-100 shadow-lg rounded-xl p-6">
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

        <script type="module">
            import {
                handleFavourite
            } from "./src/js/global.js"
            const toast = document.getElementById('toast-fav1');
            const toastContetn = document.getElementById('toast-conten-fav');
            const btnFavs = document.querySelectorAll('.btn-fav')
            handleFavourite(btnFavs, toast, toastContetn);
        </script>
<?php
    }
}
