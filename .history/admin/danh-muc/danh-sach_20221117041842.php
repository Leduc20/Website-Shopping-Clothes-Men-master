<div class="">
    <div class="border bg-green-200 mt-2 rounded">
        <p class="ml-3 mt-3">Danh sách loại hàng</p>
    </div>
    <h2>
        <?= isset($_COOKIE['success']) ? $_COOKIE['success'] : '' ?>
    </h2>
    <div class="mt-2 text-black-500 font-bold text-red-500">
        <?php
        if (isset($line)) {
            echo "<script>alert('$line');</script>";
        }
        ?>
    </div>
    <form action="">
        <div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                Edit
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($show_dm as $show){
                            extract($show)
                        }
                        ?>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th>
                                <div class="">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                </div>
                            </th>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">


                            </th>
                            <td class="py-4 px-6">

                            </td>

                            <td class="py-4 px-6">
                                <a href="<?= ADMIN_BASE . "?edit-danh-muc" ?>" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">Edit</a>
                                <a href="<?= ADMIN_BASE . "?delete-danh-muc" ?>" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">delete</a>
                            </td>
                        </tr>
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
        <div class="z-50">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Chọn tất cả</a>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Bỏ chọn tất cả</a>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Xóa các mục chọn</a>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?add-danh-muc" ?>">Nhập thêm</a>
        </div>
    </form>
</div>