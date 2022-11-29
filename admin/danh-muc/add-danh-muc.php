<div class="ml-60  ">
    <form class="bg-gray-50 py-3 rounded" action="<?= ADMIN_BASE . "?add-danh-muc" ?>" method="post" id="check-line" enctype="multipart/form-data">
        <div class="font-bold px-2 py-2 ml-2 mb-1 "> Mã loại </div>
        <input class="border w-[340px] px-2 ml-4 py-2 rounded-[4px]" disabled placeholder="Không cần nhập" type="text" name="" id="">
        <div class="font-bold px-2 ml-2 mb-1 mt-3"> Tên loại </div>
        <input class="border w-[340px] px-2 ml-4 py-2 mt-1 mb-2  rounded-[4px]" type="text" name="tenloai" id="tenloai"> <br>
        <!-- <button type="submit" class="p-2 rounded border mt-3">Thêm mới</button> -->
        <!-- <button type="submit" name="themmoi">Thêm mới</button> -->  
    </form>
    <div class="mt-4">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="themmoi">
            Thêm mới
        </button>
        
            <button type="reset" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?danh-muc" ?>">Danh sách</a>
        </div>
</div>

