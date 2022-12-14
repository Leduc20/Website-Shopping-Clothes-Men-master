<main class="bg-indigo-50/60 ml-[100px] w-full py-10 px-3 sm:px-10">
    <!-- Nav -->
    <nav class="text-lg flex items-center justify-between content-center ">
        <div class=" font-semibold text-xl text-gray-800 flex space-x-4 items-center">
            <a href="#">
                <span class="md:hidden">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>

                </span>
            </a>
            <span>Chi tiết đơn hàng</span>
        </div>

        <div class="flex space-x-5 md:space-x-10 text-gray-500 items-center content-center text-base ">
            <a class="flex items-center space-x-3 px-4 py-2 rounded-md  hover:bg-indigo-100" href="#">
                <span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </span>
                <span class="hidden sm:block">Preferences</span>
            </a>
            <a class="px-4 py-2 bg-indigo-100 rounded-md flex items-center space-x-2 text-indigo-500 hover:bg-indigo-200" href="#">
                <svg class="h-5 w-5 fill-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                </svg>
                <div class="hidden xs:block"><span class="hidden sm:inline-block">Create</span> New</div>
            </a>
            <a class href="#">
                <img class="rounded-full w-10 h-10 border-2 border-indigo-200 hover:border-indigo-300" src="images/avatar.jpg" alt srcset>
            </a>
        </div>
    </nav> <!-- /Nav -->

    <!-- Filters Section -->
    <section>
        <div class="bg-rose-100/70 mt-12  rounded-xl px-5 sm:px-10  pt-8 pb-4 relative xl:bg-[url('../images/invoice.png')] bg-no-repeat bg-right bg-contain ">
            <div class="text-rose-400 font-semibold text-lg">Tài khoản : </div>


            <div class="mt-6 grid grid-cols-1 xs:grid-cols-2 gap-y-6  gap-x-6 md:flex md:space-x-6 md:gap-x-0 ">



                <!-- <div class="flex flex-col  md:w-40  text-gray-600 text-sm space-y-2 font-semibold">
                    <label for="client">Ngày đặt</label>
                    <div class="inline-flex relative">
                        <input class="bg-indigo-800/80 text-white tracking-wider pl-4 pr-10 py-3 rounded-lg appearance-none w-full outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300" id="client" name="client" type="text" value="2019/02/28">

                        <span class="absolute top-0 right-0 m-3 pointer-events-none text-white">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>

                            </svg>
                        </span>
                    </div>
                </div> -->

                <!-- <div class="flex flex-col md:w-40  text-gray-600 text-sm space-y-2 font-semibold">
                    <label for="client">End Date</label>
                    <div class="inline-flex relative">
                        <input class="bg-indigo-800/50 text-white tracking-wider pl-4 pr-10 py-3 rounded-lg appearance-none w-full outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300" id="client" name="client" type="text" value="2019/12/09">

                        <span class="absolute top-0 right-0 m-3 pointer-events-none text-white">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>

                            </svg>
                        </span>
                    </div>
                </div> -->


                <!-- <div class="flex flex-col md:w-40  text-gray-600 text-sm space-y-2 font-semibold">
                    <label for="client">Trạng thái</label>
                    <div class="inline-flex relative">
                        <select class="bg-rose-400 text-white  px-4 py-3 rounded-lg appearance-none w-full outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300" id="client" name="client">
                            <option value="wait">Đang xử lý</option>
                        </select>
                        <span class="absolute top-0 right-0 m-3 pointer-events-none text-white">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </div>
                </div> -->

                <!-- <div class="flex flex-col md:w-40 text-gray-600 text-sm space-y-2 font-semibold">
                    <label for="client">Client</label>
                    <div class="inline-flex relative">
                        <select class="bg-blue-600/70  text-white  px-4 py-3 rounded-lg appearance-none w-full outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300" id="client" name="client">
                            <option value="Any">Any</option>
                        </select>
                        <span class="absolute top-0 right-0 m-3 pointer-events-none text-white">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </div>
                </div> -->

            </div>

            <div class="mt-5 text-gray-500 text-sm ">
                * This data has been shown according to your given information
            </div>
        </div>

    </section>
    <form action="index.php?update_stt" method="post">
        <input type="hidden" name="id" id="" value="<?= $_GET['id'] ?>">
        <div class="flex flex-col md:w-40  text-gray-600 text-sm space-y-2 font-semibold">
            <label for="client">Trạng thái</label>
            <div class="inline-flex relative">
                <select class="bg-rose-400 text-white  px-4 py-3 rounded-lg appearance-none w-full outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300" id="client" name="order_status">

                    <option value="đang xử lý">Đang xử lý</option>
                    <option value="đang giao hàng">Đang giao hàng</option>
                    <option value="giao hàng thành công">Đã giao</option>
                    <option value="đã hủy đơn">Đã hủy</option>

                </select>
                <!-- <div class="inline-flex relative">
                    <select name="update_status" id="" class="bg-rose-400 text-white  px-4 py-3 rounded-lg appearance-none w-full outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300">
                        <option value="đã giao">Đã giao</option>
                        <option value="chua giao">Chưa giao</option>
                    </select>
                </div> -->
                <span class="absolute top-0 right-0 m-3 pointer-events-none text-white">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </span>
            </div>
        </div>
        <button type="submit" name="update_status" class="px-4 mt-2 py-1 rounded-lg bg-rose-400 text-white">Cập nhật</button>
    </form>
    <!-- Invoice List Table -->
    <section class="">
        <!-- Table Header -->
        <div class="grid grid-cols-7 invoice-table-row invoice-table-header bg-white mt-10 rounded-xl px-10  py-4 flex items-center gap-x-2 text-sm font-semibold  text-gray-600">
            <div class="text-left">ID</div>
            <div class="text-left">ID đơn hàng</div>
            <div class="text-left">Tên sản phẩm</div>
            <div class="text-center">Size</div>
            <div class="text-center">Color</div>
            <div class="text-center">Số lượng</div>
            <!-- <div class="flex-1  text-center">Giá</div> -->
        </div><!-- /Table Header -->


        <!-- Table Body -->
        <?php
        foreach ($list_bill_detail as $show) {
            extract($show);
            # code...
            echo '<div class="bg-white mt-5 rounded-xl text-sm  text-gray-500 divide-y divide-indigo-50 overflow-x-auto  shadow">

            <div class="grid grid-cols-7 invoice-table-row flex items-center gap-x-3 px-10 py-4">
                <div class="text-left ">' . $id . '</div>
                <div class="text-left">' . $product_id . '</div>
                <div class="text-left"> null</div>
                <div class="text-center">'.$size.'</div>
                <div class="text-center">' . $color . '</div>
                <div class="text-center">' . $amount . '</div>
                <div class="text-center"></div>
            </div>
        </div>';
        }
        ?>
        <!-- /Table Body -->
    </section>
    <!-- /Invoice List Table -->


</main>