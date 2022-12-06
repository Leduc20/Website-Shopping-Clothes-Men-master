<?php
if (is_array($getFull_pro)) {
    extract($getFull_pro);
}
$imagepath = "../upload/" . $image;
//kiểm tra 
if (is_file($imagepath)) {
    $img = "<img src='" . $imagepath . "' width='140px'";
} else {
    $img = "No image";
}
?>
<form onsubmit="return checkSelect()" action="index.php?update-pro" method="post" id="checkproduct"
    enctype="multipart/form-data">
    <div class="grid grid-cols-2 gap-2 mr-10 bg-white rounded">
        <input type="hidden" name="id" id="">
        <div class="mt-4 ml-4">
            <p class="font-bold">Mã sản phẩm</p>
            <input class="border   rounded-[4px] px-[50px] mt-1 p-2" disabled placeholder="Không cần nhập" type="text" name=""
                id="" value="<?= $id ?>">
        </div>
        <div class="mt-4 ml-4">
            <p class="font-bold">Tên sản phẩm</p>
            <input class="border   rounded-[4px] px-[50px] mt-1 p-2" type="text" name="name" id="name" value="<?= $name ?>">
        </div>
        <div class="mt-4 ml-4">
            <p class="font-bold">Đơn giá</p>
            <input class="border  p-2 mt-1 px-[50px] rounded-[4px]" type="text" name="price" id="price" value="<?= $price ?>">
        </div>
        <!-- <div>
            <p class="font-bold mt-3 mb-2">Giảm giá</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="sale" id="sale" value="<?= $priceNew ?>">
        </div> -->
        <div class="mt-4 ml-4">
        <p class="font-bold ">Hình ảnh</p>
        <img class="border  mt-1 py-2  rounded-[4px]" type="hidden" name="image" src="<?= $img ?>" alt="" name="image">
        </div>
        
        <div class="mt-4 ml-4">
            <p class="font-bold ">Mô tả</p>
            <textarea class="border" name="detail" id="detail" cols="49" rows="5" value=""><?= $detail ?></textarea>
        </div>
        <div class="mt-4 ml-4" >
            <p class="font-bold ">Số lượng</p>
            <input class="border py-2 mt-1  rounded-[4px]" type="number" name="description" id="view"
                value="<?= $description ?>">
        </div>
        <div class="mt-4 ml-4">
            <p class="font-bold">Date</p>
            <input class="border mt-1 px-[50px] py-2 rounded-[4px]" type="text" name="date" id="view" value="<?= $date ?>">

        </div>
        <div class="mt-4 ml-4">
            <p class="font-bold ">Date</p>
            <input class="border mt-1 px-[50px] py-2 rounded-[4px]" type="date" name="date" id="view" value="">
        </div>
        <!-- <div>
            <p class="font-bold mt-3 mb-2">Trạng thái</p>
            <input class="border w-full p-2 rounded-[4px]" type="date" name="date" id="view">
        </div> -->
        <div class="mt-4 ml-4">
            <input type="hidden" name="" id="" value="<?= $groupProduct_Id ?>">
            <p class="font-bold mb-2">Loại hàng</p>
            <select class="border mb-4 w-[200px] h-[45px]  rounded" name="groupProduct_Id" id="myselect">
                <?php
                foreach ($show_dm as $show) {
                    extract($show);
                    if ($groupProduct_Id == $id)
                        echo '
                        <option value="' . $id . '" selected>' . $name . '</option> ';
                    else echo '<option value="' . $id . '">' . $name . '</option> ';
                }
                ?>
            </select>
        </div>

        <!-- <div>

                            <p class="font-bold mt-3 mb-2">Hàng đặc biệt</p>
                            <div class="border h-[48px] w-[382px]">
                                <div class="mt-[10px] ml-[20px]">
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Đặc biệt
                                    </label>
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Bình thường
                                    </label>
                                </div>
                            </div>
                        </div> -->
        <!-- <div>
                            <p class="font-bold mt-3 mb-2">Ngày nhập</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div> -->
        <!-- <div>
                            <p class="font-bold mt-3 mb-2">Số lượt xem</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div> -->

    </div>

    <div class="mt-4  ml-20 mb-10">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
            type="submit" name="update-pro"><a href="<?= ADMIN_BASE . "?san-pham" ?>"> Cập nhật </a></button>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập
            lại</button>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline"
            href="<?= ADMIN_BASE . "?san-pham" ?>">Danh sách</a>
    </div>
</form>