<div class="">
    <form onsubmit="return checkSelect()" action="index.php?add-san-pham" method="post" id="checkproduct"
        enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-2 mr-10 bg-gray-50 rounded">
            <div class="mt-4 ml-4">
                <p class="font-bold ">Mã sản phẩm</p>
                <input class="border  p-2 rounded-[4px] mt-1 " placeholder="Không cần nhập" disabled type="text" name=""
                    id="">
            </div>
            <div class="mt-4 ml-4">
                <p class="font-bold ">Tên sản phẩm</p>
                <input class="border   rounded-[4px] px-[50px] mt-1 p-2   "   type="text" name="name" id="check">
                <p id="show" class="text-red-500" ></p>
                
            </div>
            <div class=" mt-4 ml-4 ">
                <p class="font-bold ">Đơn giá</p>
                <input class="border  p-2 mt-1 px-[50px] rounded-[4px]" type="text" min="0" name="price" id="checkgia">
                <p id="showprice" class="text-red-500"></p>
            </div>
            <!-- <div class="">
                <p class="font-bold ">Giảm giá</p>
                <input class="border  rounded-[4px] mt-1  py-2" type="text" name="sale" id="sale">
            </div> -->

            <div class="mt-4 ml-4">
                <p class="font-bold ">Hình ảnh</p>
                <input class="border  mt-1 py-2  rounded-[4px]" type="file" required name="image" id="checkimg">
                <p id="showimg"></p>
            </div>
            <div class="mt-4 ml-4">
                <p class="font-bold ">Mô tả</p>
                <textarea class="border mt-1 rounded-[4px]" name="detail"  id="check" cols="25" 
                    rows="2"></textarea>
            </div>
            <div class="mt-4 ml-4">
                <p class="font-bold ">Số lượng</p>
                <input class="border py-2 mt-1    rounded-[4px]" type="number" required name="description" id="checkquantity" min="0" max="100">
                <p id="showquantity"></p>
            </div>
            <div class="mt-4 mb-4 ml-4">
                <p class="font-bold ">Date</p>
                <input class="border mt-1  py-2 rounded-[4px]" required type="date" name="date" id="checktime">
                <p id="showdate"></p>
            <!-- </div class="mt-4 ml-4"> -->
            <!-- <div>
            <p class="font-bold ">Trạng thái</p>
            <input class="border w-full p-2 rounded-[4px]" type="date" name="date" id="view">
            </div> -->
        <div>
            <p class="font-bold mt-3 mb-2">Loại hàng</p>
            <select class="border mb-4 w-[200px] h-[45px]  rounded" name="groupProduct_Id" id="">
                <?php
                foreach ($show_dm as $show) {
                    extract($show);
                    echo '
                    <option value=""></option>
                    <option value="' . $id . '">' . $name . '</option> ';
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
                        <script>
                function myFunction() {
                // Get the value of the input field with id="numb"
                let x = document.getElementById("check").value;
                // If x is Not a Number or less than one or greater than 10
                let inform;
                var checkgia = document.getElementById("checkgia");
                var checkimg = document.getElementById("")
                if (isNaN(x) || x < 1 ) {
                    inform = "Bạn Chưa Nhập Mục Này";
                } else {
                    inform = "";
                }


    </div>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="add-san-pham">Thêm mới</button>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?san-pham" ?>">Danh sách</a>
                if (checkgia.value==""){
                    checkgia = "Giá Tiền Không Được Để Trống";
                } else if(checkgia.value <= 0){
                    checkgia = "Giá Tiền Không Được Là Số Âm";
                }else{
                    checkgia ="";
                }
                document.getElementById("show").innerHTML = inform; 
                document.getElementById("showprice").innerHTML = checkgia;

                }
                </script>
        </div>
</div>
<div class="mt-4  ml-20 mb-10">
    <button onclick="myFunction()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
        type="submit" name="add-san-pham">Thêm mới</button>
    <button onclick="reset" type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập
        lại</button>
    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline"
        href="<?= ADMIN_BASE . "?san-pham" ?>">Danh sách</a>
</div>
</form>