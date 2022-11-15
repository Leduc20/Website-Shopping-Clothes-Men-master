<div>
                <form action="index.php?act=update" method="post" enctype="multipart/form-data" id="check">
                    <p class="font-bold mt-3 mb-2">Mã loại</p>
                    <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">

                    <input type="hidden" name="id" id="" value="<?php if (isset($id_commodities) && ($id_commodities > 0)) echo $id_commodities; ?>">
                    <p class="font-bold mt-3 mb-2">Tên loại</p>
                    <input class="border w-full p-2 rounded-[4px] mb-2" type="text" name="tenloai" id="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>"> <br>
                    <!-- <button type="submit" class="p-2 rounded border mt-3">Thêm mới</button> -->
                    <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Cập nhật</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="index.php?act=dslh">Danh sách</a>
                </form>
            </div>