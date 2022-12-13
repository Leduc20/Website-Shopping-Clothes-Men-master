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
    <button type="submit" name="add_size" class="mt-2 px-4 py-1 rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-500">Thêm</button>
    
</form>
<section class="">
    <!-- Table Header -->
    <div class="grid grid-cols-4 invoice-table-row invoice-table-header bg-white mt-10 rounded-xl px-10  py-4 flex items-center gap-x-2 text-sm font-semibold  text-gray-600">
        <div class="text-left">ID</div>
        <div class="text-left">ID_Product</div>
        <div class="text-center">Size</div>
        <div class="text-center"></div>
    </div><!-- /Table Header -->


    <!-- Table Body -->
    <?php 
    foreach ($list_size_ID as $show) {
        extract($show);
        // var_dump($show);
        $delete_size = "index.php?delete-size&id_size=" . $id;
        echo'<div class="bg-white mt- rounded-xl text-sm  text-gray-500 divide-y divide-indigo-50 overflow-x-auto  shadow">

        <div class=" grid grid-cols-4 invoice-table-row flex items-center gap-x-3 px-10 py-4">
            <div class="text-left ">'.$id.'</div>
            <div class="text-left">'.$product_id.'</div>
            <div class="text-center">'.$size.'</div>
            <a href='.$delete_size.' class="text-center hover:no-underline text-white ">
                <span class="px-2 p-2  rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300 ">Xóa</span>
            </a>
        </div>
    </div>';
    }
    ?>
    <!-- /Table Body -->
    <button type="" name="" class="mt-2 mb-10 px-2 p-2 rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300 "><a href="<?= ADMIN_BASE . "?san-pham" ?>" class="hover:no-underline text-white"> Trở Về Danh Sách</a></button>

</section>
</section>
</div>