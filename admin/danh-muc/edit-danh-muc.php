<?php
if (is_array($edit)) {
    extract($edit);
    // var_dump($edit);
}

$imagepath = "../upload/" . $image;
//kiểm tra 
if (is_file($imagepath)) {
    $img = "<img src='" . $imagepath . "' width='140px'";
} else {
    $img = "No image";
}

?>

<div class=" bg-white rounded  mt-10 mr-10">
    <form action="index.php?update" method="post" enctype="multipart/form-data" id="check" class="ml-4 ">
        <p class="font-bold mt-3 mb-2 ml-2">Mã loại</p>
        <input class="border ml-2 mr-5 p-1 rounded-[4px]" type="text" disabled name="" id="" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">

        <input type="hidden" placeholder="Không cần nhập" name="id" id="" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
        <p class="font-bold mt-3 mb-2 ml-2">Tên loại</p>
        <input class="border ml-2 mr-5 p-1 rounded-[4px] mb-2" type="text" name="name" id="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>"> <br>
        <!-- <button type="submit" class="p-2 rounded border mt-3">Thêm mới</button> -->
        
        <div class="mt-4 ml-4">
            <p class="font-bold ">Hình ảnh</p>
            <input type="file" name="image" id="">
            <img class="border   mt-1 py-2  rounded-[4px] w-[160px]" type="" name="image" src="../upload/<?= $image ?>" alt="" name="image">
        </div>
        <div class="mt-2 ml-2 mb-4">
            <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Cập nhật</button>
            <button type="reset" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
            <a class="bg-blue-500 hover:no-underline hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?danh-muc" ?>">Danh sách</a>
        </div>

    </form>
</div>