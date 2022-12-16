<?php foreach ($list_size_ID as $show) : ?>
<?php endforeach ?>
<div class="ml-4 mr-4">

    <form action="" method="post">

        <section class="mt-10">
            <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Thêm Size</label>

            <select id="countries" name="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected></option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
            </select>
        </section>
        <button type="" name="" class="mt-2 mb-10 px-2 p-2 rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300 "><a href="<?= ADMIN_BASE . "?danhsach_size&id=".$show['product_id'] ?>" class="hover:no-underline text-white"> Trở Về Danh Sách</a></button>
        <button type="submit" name="add_size" class="mt-2 mb-10 px-2 p-2 rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300 ">Thêm</button>


    </form>
    <?php
    if (isset($size_tb)) {
        echo "<script>alert('$size_tb');</script>";
    }
