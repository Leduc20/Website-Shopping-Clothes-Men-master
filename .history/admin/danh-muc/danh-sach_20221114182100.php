<div class="max-w-[1200px] m-auto">
            <div class="border bg-green-200 mt-2 rounded">
                <p class="ml-3 mt-3">Thêm mới loại hàng</p>
               
            </div>
            <div class="mt-2 text-red-500 font-bold text-color">
                    <?php
                    if (isset($line)) {
                        echo "<script>alert('$line');</script>";
                    }
                    ?>
                </div>
            <div>
                <form action="index.php?act=addlh" method="post" id="check-line" enctype="multipart/form-data">
                    <p class="font-bold mt-3 mb-2">Mã loại</p>
                    <input class="border w-full p-2 rounded-[4px]" placeholder="Không cần nhập" type="text" name="" id="">
                    <p class="font-bold mt-3 mb-2">Tên loại</p>
                    <input class="border w-full p-2 rounded-[4px]" type="text" name="tenloai" id="tenloai"> <br>
                    <!-- <button type="submit" class="p-2 rounded border mt-3">Thêm mới</button> -->
                    <!-- <button type="submit" name="themmoi">Thêm mới</button> -->
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="themmoi">
                    Thêm mới
                    </button>
                    <button type="reset" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="index.php?act=dslh">Danh sách</a>
                </form>
            </div>

        </div>