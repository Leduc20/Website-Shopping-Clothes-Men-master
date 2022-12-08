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