<?php foreach ($list_size_ID as $show) : ?>
    <?php endforeach ?>
<div class="ml-4 mr-4">

<form action="" method="post">

<h3 class="text-3xl font-bold dark:text-white">Danh sách size</h3>

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
    <?php foreach ($list_size_ID as $show) : ?>
         <!-- $delete_size = "index.php?delete-size&id_size=" . $id;
        $add_size = "index.php?add_size&id=" . $product_id -->
        <div class="bg-white mt- rounded-xl text-sm  text-gray-500 divide-y divide-indigo-50 overflow-x-auto  shadow">

        <div class=" grid grid-cols-4 invoice-table-row flex items-center gap-x-3 px-10 py-4">
            <div class="text-left "><?=$show['id']?></div>
            <div class="text-left"><?=$show['product_id']?></div>
            <div class="text-center"><?=$show['size']?></div>
            <a href="<?= ADMIN_BASE . "?delete-size&id_size=".$show['id'] ?>" class="text-center hover:no-underline text-white ">
                <span class="px-2 p-2  rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300 ">Xóa</span>
            </a>
            
        </div>
    </div>
    
    <?php endforeach ?>
    <!-- /Table Body -->
    <button type="" name="" class="mt-2 mb-10 px-2 p-2 rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300 "><a href="<?= ADMIN_BASE . "?san-pham" ?>" class="hover:no-underline text-white"> Trở Về Danh Sách</a></button>
    <button type="" name="" class="mt-2 mb-10 px-2 p-2 rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300 "><a href="<?= ADMIN_BASE . "?add_size&id=".$_GET['id'] ?>" class="hover:no-underline text-white"> ADD</a></button>
    

</section>
</section>
</div>
<?php
if (isset($size_tb)) {
    echo "<script>alert('$size_tb');</script>";
}