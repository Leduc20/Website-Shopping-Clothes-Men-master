<div class="">
<form onsubmit="return checkSelect()" action="index.php?add-san-pham" method="post" id="checkproduct" enctype="multipart/form-data">
    <div class="grid grid-cols-2 gap-5 ml-20 bg-gray-50 rounded">
        <div class="mt-4 ml-4">
            <p class="font-bold ">Mã sản phẩm</p>
            <input class="border w-full p-2 rounded-[4px] mt-1 " placeholder="Không cần nhập" disabled type="text" name="" id="">
        </div>
        <div class="mt-4">
            <p class="font-bold ">Tên sản phẩm</p>
            <input class="border  rounded-[4px] mt-1 px-[100px] py-2 " type="text" name="name" id="name">
        </div>
        <div class=" ml-4">
            <p class="font-bold ">Đơn giá</p>
            <input class="border w-full py-2 mt-1 rounded-[4px]" type="text" name="price" id="price">
        </div>
        <div class="">
            <p class="font-bold ">Giảm giá</p>
            <input class="border  rounded-[4px] mt-1 px-[100px] py-2" type="text" name="sale" id="sale">
        </div>
        
        <div class="mt-4 ml-4">
            <p class="font-bold ">Hình ảnh</p>
            <input class="border w-full mt-1 py-2 rounded-[4px]" type="file" name="image" id="image">
        </div>
        <div class="mt-4 ml-4">
            <p class="font-bold ">Mô tả</p>
            <textarea class="border mt-1 px-[100px] rounded-[4px]" name="detail" id="detail" cols="0" rows="0"></textarea>
        </div>
        <div class="mt-4 ml-4">
            <p class="font-bold ">Số lượng</p>
            <input class="border py-2 mt-1 w-full rounded-[4px]" type="number" name="description" id="view">
        </div>
        <div class="mt-4 ml-4">
            <p class="font-bold ">Date</p>
            <input class="border mt-1 px-[115px] py-2 rounded-[4px]" type="date" name="date" id="view">
        </div class="mt-4 ml-4">
        <!-- <div>
            <p class="font-bold ">Trạng thái</p>
            <input class="border w-full p-2 rounded-[4px]" type="date" name="date" id="view">
        </div> -->
        <div class="mt-4 ml-4">
            <p class="font-bold ">Loại hàng</p>
            <select class="border w-[382px] h-[40px] mb-4 mt-1 rounded" name="groupProduct_Id" id="myselect">
                <?php
                foreach ($listline as $show) {
                    extract($show);
                    echo '<option value="' . $id_commodities . '">' . $name . '</option> ';
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

<<<<<<< HEAD
        </div>
    </div>
    <div class="mt-4  ml-20 mb-10">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="add-san-pham">Thêm mới</button>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?san-pham" ?>">Danh sách</a>
    </div>
=======
    </div>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="add-san-pham">Thêm mới</button>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?san-pham" ?>">Danh sách</a>
>>>>>>> 6de33849dbf38f20c253981fee323592eb8831b0
</form>