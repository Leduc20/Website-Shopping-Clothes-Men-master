<div class="search flex py-24 container mx-auto">
    <div>
        <form class=" items-center" method="GET">
            <input type="hidden" name='q' value="<?= $keyWord ?>">
            <input type="hidden" name='search'>
            <div class="my-3">
                <p class="font-semibold my-3">Loại hàng</p>
                <select class="form-select" name="category" style="max-width: 250px; height: 30px">
                    <option value="" selected>Tất cả danh mục</option>
                    <?php foreach ($categories as $key => $value) : ?>
                        <option value="<?= $value['name'] ?>" <?= $value['name'] == $category ? 'selected' : null ?>>
                            <?= $value['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="my-3">
                <p class="font-semibold my-3">Khoảng giá</p>
                <div class="flex items-center" style="max-width: 250px; height: 30px">
                    <input type="text" name='start' id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> -
                    <input type="text" name='end' id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <button class="w-full my-5 transition ease-in duration-300 inline-flex items-center justify-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-4 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600" >Lọc</button>
        </form>
    </div>
    
    <h3 class="mb-4">Kết quả tìm kiểm: <?= $keyWord ?></h3>
    
    <div class="grid grid-cols-4 gap-10 px-4">
        <?php foreach ($products as $key => $value) : ?>
            <div class="max-w-md w-full bg-gray-100 shadow-lg rounded-xl p-6">
                <div class="relative">
                    <form action="<?= SITE_URL ?>" method="POST">
                        <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="absolute flex flex-col top-0 right-0 p-3">
                            <button type="submit" name="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'remove_fav' : 'add_fav' ?>" class="btn-fav transition ease-in duration-300 bg-white hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'red' : 'none' ?>" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                            <input type="hidden" name="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'fav_id' : 'prd_id' ?>" value="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? $value['favorite_id'] : $value['id'] ?>">
                            <button name="hi" value="hí" x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="p-2 absolute top-10 right-4 w-32 mt-2 bg-white rounded-md shadow-xl">
                                <?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'Xóa khỏi sản phẩm yêu thích' : 'Thêm vào list sản phẩm yêu thích' ?>
                            </button>
                        </div>
                    </form>

                    <a href="<?= SITE_URL ?>?chi-tiet&id=<?= $value['id'] ?>">
                        <div class=" h-56 mb-3">
                            <img src=" <?= BASE_URL . "./upload/" . $value['image'] ?>" alt="Just a flower" class="h-full w-full object-fill rounded-2xl" />
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex flex-wrap">
                                <div class="w-full flex-none text-sm flex items-center text-gray-600"></div>
                                <div class="flex items-center w-full justify-between min-w-0">
                                    <h2 class="text-xl mr-auto font-medium cursor-pointer text-black-100 hover:text-purple-500 truncate">
                                        <?= $value['name'] ?>
                                    </h2>
                                </div>
                            </div>
                            <div class="text-lg text-black-600 font-normal mt-1">
                                <?= $value['price'] ?> vnđ

                            </div>

                            <div class="flex space-x-2 text-sm font-medium justify-start my-3">
                                <button class="w-full transition ease-in duration-300 inline-flex items-center justify-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600">
                                    <span>Xem chi tiết</span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>