<div>
    <form action="" method="post" id="check-line" enctype="multipart/form-data">
        <p class="font-bold mt-3 mb-2">Mã loại</p>
        <input class="border w-full p-2 rounded-[4px]" placeholder="Không cần nhập" type="text" name="" id="">
        <p class="font-bold mt-3 mb-2">Tên loại</p>
        <input class="border w-full p-2 rounded-[4px]" type="text" name="tenloai" id="tenloai"> <br>
        <!-- <button type="submit" class="p-2 rounded border mt-3">Thêm mới</button> -->
        <!-- <button type="submit" name="themmoi">Thêm mới</button> -->
        <a href="<?= ADMIN_BASE . "?add-dm" ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="themmoi">
            Thêm mới
        </a>
        <button type="reset" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?danh-muc" ?>">Danh sách</a>
    </form>
</div>