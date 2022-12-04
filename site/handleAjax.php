<?php
require_once '../global.php';
require_once '../model/pdo.php';
require_once '../model/product.php';

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