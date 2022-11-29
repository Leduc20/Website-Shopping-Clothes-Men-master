<div class="ml-20 mt-10 w-full ">
    <div class="border bg-gray-200 rounded">
        <p class=" w-full justify-center flex py-2 uppercase font-semibold text-gray-500">Danh sách loại hàng</p>
    </div>
    <h2>
        <?= isset($_COOKIE['success']) ? $_COOKIE['success'] : '' ?>
    </h2>
    <div class="mt-2 text-black-500 font-bold text-red-500">
        <?php
        if (isset($msg)) {
            echo "<script>alert('$msg');</script>";
        }
        ?>
    </div>
    <form action="">
        <div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-2">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th>

                            </th>
                            <th scope="col" class="py-3 px-6">
                                Mã loại
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Tên loại
                            </th>
                            <th scope="col" class="py-3 px-6">
                                
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($show_dm as $show) {
                            extract($show);
                            $delete = "index.php?delete&id=" . $id;
                            $edit = "index.php?edit&id=" . $id;
                            echo '<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th>
                                <div class="ml-7">
                                    <input class="" type="checkbox" value="" id="flexCheckChecked">
                                </div>
                            </th>
                            <th scope="row" class=" py-4 px-6 font-medium  text-gray-900 whitespace-nowrap dark:text-white">
                            ' . $id . '
                            </th>
                            <td class="py-4 px-6">
                            ' . $name . '
                            </td>
                            <td class="py-4 px-6">
                            <a onclick="" href="' . $edit . '" class=" px-2 text-white  rounded font-bold bg-blue-600 hover:bg-blue-700 ">Edit</a>
                            <a onclick="" href="' . $delete . '" class="  px-2 text-white font-bold rounded bg-red-500 hover:bg-red-700 ">Delete</i></a>
                        </td>
                        </tr>';
                        }
                        ?>

                        <!-- <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th>
                                                    <div class="">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    </div>
                                                </th>
                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    1000
                                                </th>
                                                <td class="py-4 px-6">
                                                    Đồng hồ
                                                </td>

                                                <td class="py-4 px-6">
                                                    <a href="#" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">Edit</a>
                                                    <a href="#" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">delete</a>
                                                </td>
                                            </tr>
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th>
                                                    <div class="">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    </div>
                                                </th>
                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    1000
                                                </th>
                                                <td class="py-4 px-6">
                                                    Đồng hồ
                                                </td>

                                                <td class="py-4 px-6">
                                                    <a href="#" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">Edit</a>
                                                    <a href="#" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">delete</a>
                                                </td>
                                            </tr> -->

                    </tbody>
                </table>
            </div>
        </div>
        <div class="ml-20 mt-4">
            <a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Chọn tất cả</a>
            <a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Bỏ chọn tất cả</a>
            <a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Xóa các mục chọn</a>
            <a class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?add-danh-muc" ?>">Nhập thêm</a>
        </div>
    </form>
    <div id="toast-success" class="hidden absolute top-0 left-2/4 -translate-x-2/4 flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">Xóa thành công</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    
</div>