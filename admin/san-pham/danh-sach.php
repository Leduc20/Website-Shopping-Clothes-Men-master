<form action="">
    <div>
        <div class="ml-2 mr-2 news overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th>

                        </th>
                        <th scope="col" class="py-3 px-2">
                            Mã hàng hóa
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Mã loại
                        </th>
                        <!-- <th scope="col" class="py-3 px-2">
                                                        Ten Danh mục
                                                    </th> -->
                        <th scope="col" class="py-3 px-2">
                            Tên sản phẩm
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Chi tiết
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Biến thể
                        </th>
                        <th scope="col" class="py-3 px-1">
                            Số lượng
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Hình ảnh
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Giá gốc
                        </th>
                        <!-- <th scope="col" class="py-3 px-2">
                            Giá giảm
                        </th> -->
                        <!-- <th scope="col" class="py-3 px-2">
                            ststus
                        </th> -->
                        <th scope="col" class="py-3 px-2">
                            Thời Gian
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Mô Tả
                        </th>
                        <th scope="col" class="py-1 px-2">
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_pro as $show) {
                        extract($show);
                        //đường dẫn ảnh trong extract đường dẫn
                        $imagepath = "../upload/" . $image;
                        //kiểm tra 
                        if (is_file($imagepath)) {
                            $image = "<img src='" . $imagepath . "' width='140px'";
                        } else {
                            $image= "No image";
                        }
                        $delete = "index.php?delete-sanpham&id=" . $id;
                        $edit = "index.php?edit-sanpham&id=" . $id;
                        $edit_size = "index.php?add_size&id=" . $id;
                        $add_color = "index.php?add_color&id=" . $id;
                        $detail_size = "index.php?detail_size&id=" . $id;
                        $detail_color = "index.php?detail_color&id=" . $id;
                        echo '<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th>
                            <div class="">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            </div>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ' . $id . '
                        </th>
                        <td class="py-4 px-2">
                        ' . $groupProduct_Id . '
                        </td>
                        
                        <td class="py-4 px-2">
                        ' . $name . '
                        </td>
                        <td class="py-4 px-2">
                        ' . $detail . '
                        </td>
                        <td class="px-2 leading-10">
                        <a href="' . $edit_size. '" class="px-2 p-2  rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300">ADD_size</a>
                        <a href="' . $add_color . '" class="px-2 p-2  rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300">ADD_color</a>
                        </td>
                        <td class="py-4 px-2">
                        ' . $description . '
                        </td>
                        
                        <td class="py-4 px-2">
                        ' . $image . '
                        </td>
                        <td class="py-4 px-2">
                        ' . $price . '
                        </td>
                        
                        <td class="py-4 px-2">
                        ' . $created_at . '
                        </td>
                        <td class="py-4 px-2">
                        ' . $description . '
                        </td>
                        <td class="leading-10 text-center">
                            <a href="' . $edit . '" class="px-2 p-2  rounded-lg bg-rose-400 text-white hover:no-underline hover:bg-rose-300">Sửa</a>
                            <a href="' . $delete . '" class="px-2 p-2   rounded-lg bg-red-500 text-white hover:no-underline hover:bg-rose-400">Xóa</a>
                        </td>
                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4 ml-72">
        <a class="bg-blue-500 hover:bg-blue-700 hover:no-underline text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Chọn tất cả</a>
        <a class="bg-blue-500 hover:bg-blue-700 hover:no-underline text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Bỏ chọn tất cả</a>
        <a class="bg-blue-500 hover:bg-blue-700 hover:no-underline text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Xóa các mục chọn</a>
        <a class="bg-blue-500 hover:bg-blue-700 hover:no-underline text-white font-bold py-2 px-4 border border-blue-700 rounded no-underl" href="<?= ADMIN_BASE . "?add-san-pham" ?>">Nhập thêm</a>
    </div>
</form>