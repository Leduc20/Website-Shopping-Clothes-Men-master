<form action="">
    <div>
        <div class="overflow-x-auto flex  w-full shadow-md sm:rounded-lg mt-4">
            <table class="text-lg text-left text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th>

                        </th>
                        <th scope="col" class="py-4 px-4">
                            Id
                        </th>
                        <th scope="col" class="py-4 px-4">
                            Category
                        </th>
                        <!-- <th scope="col" class="py-4 px-4">
                                                        Ten Danh mục
                                                    </th> -->
                        <th scope="col" class="py-4 px-4">
                            Name
                        </th>
                        <th scope="col" class="py-4 px-4">
                            Detail
                        </th>
                        <th scope="col" class="py-4 px-4">
                            Image
                        </th>
                        <th scope="col" class="py-4 px-4">
                            Price
                        </th>
                        <th scope="col" class="py-4 px-4">
                            Sale
                        </th>
                        <!-- <th scope="col" class="py-4 px-4">
                            ststus
                        </th> -->
                        <th scope="col" class="py-4 px-4">
                            Date
                        </th>
                        <th scope="col" class="py-4 px-4">
                            Description
                        </th>
                        <th scope="col" class="py-4 px-4">
                            Quanlity
                        </th>
                        <th scope="col" class="py-4 px-4">
                            
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
                        echo '<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th>
                            <div class="">
                                <input class="ml-2" type="checkbox" value="" id="flexCheckChecked">
                            </div>
                        </th>
                        <th scope="row" class="justify-center flex mt-9 font-medium text-black ">
                            ' . $id . '
                        </th>
                        <td class="py-4 px-3">
                            ' . $groupProduct_Id . '
                        </td>
                        <td class="py-4 px-3">
                            ' . $name . '
                        </td>
                        <td class="py-4 px-3">
                            ' . $detail . '
                        </td>
                        <td class="py-4 px-3">
                            ' . $image . '
                        </td>
                        <td class="py-4 px-3">
                            ' . $price . ' VND
                        </td>
                        <td class="py-4 px-3">
                            ' . $priceNew . ' VND
                        </td>
                        <td class="py-4 px-3">
                            ' . $date . '
                        </td>
                        <td class="py-4 px-3">
                            ' . $description . '
                        </td>
                        <td class="py-4 px-3">
                            ' . $status . '
                        </td>
                        <td class="">
                        <a  href="'.$edit.'" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">Edit</a>
                        <a href="'.$delete.'" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">delete</a>
                         </td>
                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Chọn tất cả</a>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Bỏ chọn tất cả</a>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Xóa các mục chọn</a>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?add-san-pham" ?>">Nhập thêm</a>
    </div>
</form>