<form onsubmit="return checkSelect()" action="index.php?add-san-pham" method="post" id="checkproduct" enctype="multipart/form-data">
    <div class="grid grid-cols-3 gap-8">
        <div>
            <p class="font-bold mt-3 mb-2">Mã sản phẩm</p>
            <input class="border w-full p-2 rounded-[4px]" placeholder="Không cần nhập" type="text" name="" id="">
        </div>
        <div>
            <p class="font-bold mt-3 mb-2">Tên sản phẩm</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="name" id="name">
        </div>
        <div>
            <p class="font-bold mt-3 mb-2">Đơn giá</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="price" id="price">
        </div>
        <div>
            <p class="font-bold mt-3 mb-2">Giảm giá</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="sale" id="sale">
        </div>
        <img src="" alt="">
        <div>
            <p class="font-bold mt-3 mb-2">Hình ảnh</p>
            <input class="border w-full p-2 rounded-[4px]" type="file" name="image" id="image">
        </div>
        <div>
            <p class="font-bold mt-3 mb-2">Mô tả</p>
            <textarea class="border" name="detail" id="detail" cols="49" rows="5"></textarea>
        </div>
        <div>
            <p class="font-bold mt-3 mb-2">Số lượng</p>
            <input class="border w-full p-2 rounded-[4px]" type="number" name="description" id="view">
        </div>
        <div>
            <p class="font-bold mt-3 mb-2">Date</p>
            <input class="border w-full p-2 rounded-[4px]" type="date" name="date" id="view">
        </div>
        <!-- <div>
            <p class="font-bold mt-3 mb-2">Trạng thái</p>
            <input class="border w-full p-2 rounded-[4px]" type="date" name="date" id="view">
        </div> -->
        <div>
            <p class="font-bold mt-3 mb-2">Loại hàng</p>
            <select class="border w-[382px] h-[45px] rounded" name="groupProduct_Id" id="myselect">
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

    </div>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="add-san-pham">Thêm mới</button>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?san-pham" ?>">Danh sách</a>
</form>