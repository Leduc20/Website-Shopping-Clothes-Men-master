<section class="h-screen">
    <div class="container px-6 py-12 h-full">
        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
            <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0 flex items-center">
                <img src="http://localhost/webbanhang/Website-Shopping-Clothes-Men-master/site/src/img/logo_2.png"
                    class="" alt="Phone image" />
                <span style="font-size: 50px; color: #de3730ff;;font-weight: bold;">RANI</span>
            </div>
            <div class="md:w-8/12 lg:w-5/12 lg:ml-20">

                <form action="<?= AUTH_BASE  ?>?login" method="POST">
                    <!-- Email input -->
                    <div class="mb-6">
                        <input type="text"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Email address" name="email" />
                            <?php if(isset($_GET['error2']))  echo "Tài khoản và mật khẩu sai"?>
                    </div>

                    <!-- Password input -->
                    <div class="mb-6">
                        <input type="password"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Password" name="password" />
                            <?php if(isset($_GET['error3']))  echo "Mật khẩu sai"?>
                    </div>
                    
                    <!-- Submit button -->
                    <button type="submit" name="login"
                    class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    Sign in
                </button>
                <div class="flex justify-between items-center mb-6">
                    <a href="<?= AUTH_BASE ?>?register"
                        class="mt-5 text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out">Register?
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>