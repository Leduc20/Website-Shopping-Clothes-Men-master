<form action="" method="post">
    <section class="mt-10">
        <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Thêm thuộc tính Color</label>

        <select id="countries" name="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Chọn Color</option>
            <option value="Vang">Vàng</option>
            <option value="Xanh">Xanh</option>
            <option value="Đen">Đen</option>
            <option value="Tim">Tím</option>
        </select>
    </section>
    <button type="submit" name="add_color" class="px-4 py-1 rounded-lg bg-rose-400 text-white">Thêm color</button>
</form>
<section class="">
    <!-- Table Header -->
    <div class="grid grid-cols-4 invoice-table-row invoice-table-header bg-white mt-10 rounded-xl px-10  py-4 flex items-center gap-x-2 text-sm font-semibold  text-gray-600">
        <div class="text-left">ID</div>
        <div class="text-left">ID_Product</div>
        <div class="text-center">Màu</div>
        <div class="text-center">Hành động</div>
    </div><!-- /Table Header -->


    <!-- Table Body -->
    <?php foreach ($list_color_ID as $show) {
        extract($show);
        $delete_color = "index.php?delete-color&id_color=" . $id;
        echo'<div class="bg-white mt- rounded-xl text-sm  text-gray-500 divide-y divide-indigo-50 overflow-x-auto  shadow">

        <div class="grid grid-cols-4 invoice-table-row flex items-center gap-x-3 px-10 py-4">
            <div class="text-left ">'.$id.'</div>
            <div class="text-left">'.$product_id.'</div>
            <div class="text-center">'.$color.'</div>
            <a href='.$delete_color.' class="text-center ">
                <span class="px-4 py-1 rounded-lg bg-rose-400 text-white">Xóa</span>
            </a>
        </div>
    </div>';
    }
    ?>
    <!-- /Table Body -->
</section>
</section>