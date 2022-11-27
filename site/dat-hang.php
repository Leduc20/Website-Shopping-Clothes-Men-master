<?php
require_once '../model/pdo.php';
require_once '../model/product.php';

function split_array($arr1, $arr2, $arr3, $arr4)
{
    for ($i = 0; $i < count($arr1); $i++) {
        $products[$i]['id'] = $arr1[$i];
        $products[$i]['name'] = getProductById($arr1[$i])['name'];
        $products[$i]['image'] = getProductById($arr1[$i])['image'];
        $products[$i]['price'] = getProductById($arr1[$i])['price'];
    }
    for ($i = 0; $i < count($arr2); $i++) {
        $products[$i]['sl'] = $arr2[$i];
    }
    for ($i = 0; $i < count($arr3); $i++) {
        $products[$i]['size'] = $arr3[$i];
    }
    for ($i = 0; $i < count($arr4); $i++) {
        $products[$i]['color'] = $arr4[$i];
    }

    return $products;
}

$products = split_array($_POST['prdId'], $_POST['sl'], $_POST['size'], $_POST['color']);
?>

<div class=" container mx-auto mb-4">
    <div class="my-3">
        <p class="uppercase text-2xl font-bold">
            thông tin thanh toán
        </p>
    </div>
    <form class="flex" action="<?= SITE_URL ?>?dat-hang" method="post">
        <div class="flex-1 px-4">
            <!-- foreach -->
            <?php foreach ($products  as $key => $value) : ?>
                <input type="hidden" name="prdId[]" value="<?= $value['id'] ?>">
                <input type="hidden" name="sl[]" value="<?= $value['sl'] ?>">
                <input type="hidden" name="size[]" value="<?= $value['size'] ?>">
                <input type="hidden" name="color[]" value="<?= $value['color'] ?>">
                <input type="hidden" name="total" value="<?= $_POST['total'] ?>">
                <div class="flex space-x-6 p-4 border-b-2 ">
                    <div>
                        <div class="border p-2 rounded">
                            <img src="<?= $value['image'] ?>" alt="" class="w-24 h-24">
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <div>
                            <p class="">
                                <?= $value['name'] ?>
                            </p>
                            <div class="text-xs text-gray-500">
                                <p class="my-1">
                                    <span>Size: </span> <span><?= $value['size'] ?></span>
                                    <!--  -->
                                    <span>
                                        &nbsp
                                    </span>
                                    <!--  -->
                                    <span>Màu: </span> <span><?= $value['color'] ?></span>
                                </p>
                                <p class="my-1">
                                    Số lượng: <span> <?= $value['sl'] ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="text-sm text-gray-600 mr-4">
                            price: <?= $value['price'] ?>
                        </div>
                        <div class="text-sm text-gray-600 mr-4">
                            <?= $value['price'] * $value['sl'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <!--  -->
            <div class="text-right m-4 mr-12 text-xl">
                <p>Tổng tiền:
                    <span> <?= $_POST['total'] ?></span>
                </p>
            </div>
        </div>

        <!--  -->
        <div class="border-2 mx-4">
        </div>
        <!-- 
             -->
        <div class="flex-1 text-center pr-4">
            <p class="text-xl font-semibold">Thông tin khách hàng</p>
            <div class="px-8">
                <input type="text" name="name_user" value="<?=$_SESSION['user']['name']?>" class="my-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mời nhập tên khách hàng..." readonly>
                <input type="text" name="address_user" class="my-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mời nhập địa chỉ nhận hàng.." readonly>
                <input type="text" name="phone_user" class="my-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mời nhập số điện thoại..." readonly>
                <div class="border p-2 my-3">
                    <p>
                        Phương thức thanh toán:
                        <select name="payment" id="">
                            <option value="cod">Nhận hàng thanh toán</option>
                            <option value="banking">Thẻ ngân hàng</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="">
                <button id="btn-submit" name="dat-hang" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-3/4">
                    Thanh toán
                </button>
            </div>
        </div>

    </form>

</div>

<script type="module">
    import {
        cartCount,
        carts
    } from "./src/js/global.js";

    const prdIds = <?php echo json_encode($_POST['prdId']) ?>;
    const prdSizes = <?php echo json_encode($_POST['size']) ?>;
    const prdColors = <?php echo json_encode($_POST['color']) ?>;
    const btnSubmit = document.getElementById('btn-submit');

    btnSubmit.onclick = function(e) {
        const cartNews = carts.filter((prd, index) => {
            const isId = prdIds.indexOf(String(prd.id))
            const isSize = prdSizes.indexOf(prd.size)
            const isColor = prdColors.indexOf(prd.color)
            if (isId >= 0 && isSize >= 0 && isColor >= 0) return false;
            return true

        })
        cartCount.textContent = cartNews.length
        localStorage.setItem('carts', JSON.stringify(cartNews))
    }
</script>