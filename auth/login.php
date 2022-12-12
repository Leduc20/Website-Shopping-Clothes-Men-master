
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex justify-center px-6 py-24 mx-auto">
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Đăng nhập vào tài khoản của bạn
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="<?= AUTH_BASE ?>?login" method="POST">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email của bạn</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="email@gmail.com" required="">
                                <?php if(isset($_GET['error2']))  echo "Tài khoản và mật khẩu sai"?>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mật khẩu</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   required="">
                                <?php if(isset($_GET['error3']))  echo "Mật khẩu sai"?>
                            </div>
                            <div class="flex items-center justify-between"> 
                                <a href="#"
                                    class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Quên mật khẩu?</a>
                            </div>
                            <button type="submit" name="login"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Đăng nhập</button>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                Bạn chưa có tài khoản? <a href="<?= AUTH_BASE ?>?register"
                                    class="font-semibold text-primary-600 hover:underline dark:text-primary-500">Đăng ký</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <!--  -->
</body>

