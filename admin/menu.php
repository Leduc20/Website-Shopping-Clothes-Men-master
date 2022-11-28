 
 <div  class="w-[200px] h-[350px] bg-gray-600">

    <ul>
        <li class="pt-3 ">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex " href="<?= SITE_URL . "?list-danh-muc"?>"><i class="fa-solid fa-house mt-1 mr-2 ml-1"></i> <span> Trở về Website </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="index.php"><i class="fa-solid fa-store mt-1 mr-2 ml-1"></i> <span> Trang chủ </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="<?= ADMIN_BASE . "?danh-muc"?>"><i class="fa-solid fa-list mt-1 mr-2 ml-1"></i> <span> Loại hàng </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="<?= ADMIN_BASE . "?san-pham"?>"><i class="fa-solid fa-cart-shopping mt-1 mr-2 ml-1"></i> <span> Hàng hóa </span></a>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="<?= ADMIN_BASE . "?khach-hang"?>"><i class="fa-solid fa-users mt-1 mr-2 ml-1"></i> <span> Khách hàng </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="index.php?act=dsbl"><i class="fa-solid fa-comments mt-1 mr-2 ml-1"></i> <span> Bình luận </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="index.php?act=dstk"><i class="fa-solid fa-chart-simple mt-1 mr-2 ml-1"></i> <span> Thống kê </span></a>
        </li>
    </ul>
</div>

        <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                                class="absolute z-10 left-0 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl"> HOver me</div>        
         <aside class="w-64" aria-label="Sidebar">
   <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800 hidden ">
      <ul class="space-y-2">
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
               <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
               <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
            </a>
         </li>
         <li>
            <a href="<?= ADMIN_BASE . "?san-pham"?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
            </a>
         </li>
      </ul>
   </div>
</aside> --> 
<!--  -->
<!-- <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true"
                            class="relative">
                            <a href="./product.html" @mouseover="open = true"
                                class="flex items-center block p-2 rounded-md">
                                <p class="inline-block no-underline hover:text-black hover:underline py-2 px-4">
                                    Sản phẩm
                                    <span class="hidden lg:block float-right">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </span>
                                </p>
                            </a>
                            <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                                class="absolute z-10 left-0 w-48 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 1
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 2
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 3
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                    Dropdown List 4
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="./contact.html">
                                Liên hệ
                            </a>
                        </li>
                        <li x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true"
                            class="relative z-10">
                            <a @mouseover="open = true" class="inline-block no-underline opacity-80 hover:opacity-100"
                                href="#">
                                <svg class="fill-current pointer-events-none text-grey-darkest w-5 h-5 inline"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                            </a>

                            <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                                class="absolute left-6 -top-5 w-72 mt-2 bg-white rounded-md shadow-xl">
                                <div
                                    class="relative pl-4 flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                                    <div class="grid place-items-center h-full w-12 text-gray-300">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </button>
                                    </div> -->
<!-- 
                                    <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                                        type="text" id="search" placeholder="Tìm kiếm sản phẩm . . ." />
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>  