<?php
if (isset($list_user)) {
    extract($list_user);
}
?>
<form action="index.php?update-tai-khoan" method="post" id="checkproduct" enctype="multipart/form-data">
    <input type="hidden" name="id" id="" value="<?=$id?>">
    <div class="mb-6 w-[350px]">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên đăng nhập</label>
        <input name="userName" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@gmail.com" value="<?= $userName ?>" required>
    </div>
    <!-- <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mật khẩu</label>
        <input name="passWord" type="text" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="********" value="" required>
    </div> -->
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Địa chỉ</label>
        <input name="address" type="text" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="<?= $address ?>" required>
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Điện thoại</label>
        <input name="phone" type="number" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $phone ?>" required>
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên người dùng</label>
        <input name="name" type="text" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $name ?>" required>
    </div>

    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chọn vai trò</label>
    <select name="role" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $is_Admin ?>">
    <?php if ($is_Admin == 0) : ?>
                <option value="0" selected>Khách hàng</option>
                <option value="2">Nhân viên</option>
                <option value="1">Admin</option>
            <?php elseif ($is_Admin == 1) : ?>
                <option value="0">Khách hàng</option>
                <option value="2">Nhân viên</option>
                <option value="1" selected>Admin</option>
            <?php elseif ($is_Admin == 2) : ?>
                <option value="0">Khách hàng</option>
                <option value="2" selected>Nhân viên</option>
                <option value="1">Admin</option>
            <?php endif; ?>
    </select>

    <div class="flex items-start mb-6">
        <!-- <div class="flex items-center h-5">
            <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
        </div> -->
        <!-- <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label> -->
    </div>
    <button type="submit" name="update-tai-khoan" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>