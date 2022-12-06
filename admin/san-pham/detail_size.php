
<a href="<?= ADMIN_BASE . "?add_size" ?>" type="submit" name="add_size" class="px-4 py-1 rounded-lg bg-rose-400 text-white">Thêm size</a><section class="">
    <!-- Table Header -->
    <div class="grid grid-cols-4 invoice-table-row invoice-table-header bg-white mt-10 rounded-xl px-10  py-4 flex items-center gap-x-2 text-sm font-semibold  text-gray-600">
        <div class="text-left">ID</div>
        <div class="text-left">ID_Product</div>
        <div class="text-center">Size</div>
        <div class="text-center">Hành động</div>
    </div><!-- /Table Header -->


    <!-- Table Body -->
    <?php 
    foreach ($list_size_ID as $show) {
        extract($show);
        // var_dump($show);
        $delete_size = "index.php?delete-size&id_size=" . $id;
        echo'<div class="bg-white mt- rounded-xl text-sm  text-gray-500 divide-y divide-indigo-50 overflow-x-auto  shadow">

        <div class="grid grid-cols-4 invoice-table-row flex items-center gap-x-3 px-10 py-4">
            <div class="text-left ">'.$id.'</div>
            <div class="text-left">'.$product_id.'</div>
            <div class="text-center">'.$size.'</div>
            <a href='.$delete_size.' class="text-center ">
                <span class="px-4 py-1 rounded-lg bg-rose-400 text-white">Xóa</span>
            </a>
        </div>
    </div>';
    }
    ?>
    <!-- /Table Body -->
</section>