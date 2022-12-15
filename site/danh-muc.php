<div class="px-6 flex mt-8 mb-8">
    <div class="" style="width: 300px;">
        <div class="">
            <h3 class="text-lg font-bold">Tất cả danh mục</h3>

            <div class="flex flex-col" style="max-height: 250px; overflow-y: auto">
                <?php foreach ($categories as $key => $value) : ?>
                    <a href="<?= SITE_URL ?>?category=<?= str_replace(' ', '-', $value['name']) ?>&id=<?= $value['id'] ?>" class="py-0.5 <?= $_GET['id'] == $value['id'] ? 'text-red-400' : null ?>">
                        - <?= $value['name'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="mt-3">
            <h3 class="text-lg font-bold">Bộ lọc tìm kiếm</h3>
            <div class=" items-center">
                <div class="flex flex-col">
                    <p class="font-semibold my-3">Khoảng giá</p>
                    <div class="flex items-center" style="max-width: 250px; height: 30px">
                        <input type="text" placeholder="Thấp nhất" name='start' id="small-price" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> -
                        <input type="text" placeholder="Cao nhất" name='end' id="big-price" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div id="cleatFilter" class="mt-3 hidden text-center text-sm cursor-pointer">Xóa bộ lọc</div>
                <button id="btn-filter" data-catId="<?= $_GET['id'] ?>" class="w-full my-5 transition ease-in duration-300 inline-flex items-center justify-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-4 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600" type="submit">Lọc</button>
            </div>
        </div>
    </div>

    <div class="flex-1">
        <div class="pl-2 flex items-center h-10 bg-red-200 rounded-sm">
            <span class="">Sắp xếp theo: </span>
            <span id="prdNew" class="mx-4 bg-red-500 rounded px-2 text-white cursor-pointer">Mới nhất</span>
            <span id="prdSell" class="mx-4 rounded px-2 cursor-pointer">Bán chạy nhất</span>
        </div>

        <div id="list-filter" style="min-height:250px" class=" relative mt-6  ml-4 grid grid-cols-3 lg:grid-cols-4 gap-10 px-4">
            <?php foreach ($products as $key => $value) : ?>
                <div class="max-w-md w-full bg-gray-100 shadow-lg rounded-xl p-6">
                    <div class="relative">
                        <div action="<?= SITE_URL ?>" method="POST">
                            <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="absolute flex flex-col top-0 right-0 p-3">
                                <button id="btn-fav" type="submit" data-favId="<?= $value['favorite_id'] ?>" data-prdId="<?= $value['id'] ?>" value=" <?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? $value['favorite_id'] : $value['id'] ?>" name="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'remove_fav' : 'add_fav' ?>" class="btn-fav transition ease-in duration-300 bg-white hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="tymPrd h-6 w-6" fill="<?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'red' : 'none' ?>" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>

                                <button id="poper-fav" x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="p-2 absolute top-10 right-4 w-32 mt-2 bg-white rounded-md shadow-xl">
                                    <?= ($value['user_id'] == (isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 'null')) ? 'Xóa khỏi sản phẩm yêu thích' : 'Thêm vào list sản phẩm yêu thích' ?>
                                </button>
                            </div>
                        </div>

                        <a href="<?= SITE_URL ?>?chi-tiet&id=<?= $value['id'] ?>">
                            <div class=" h-56 mb-3">
                                <img src=" <?= BASE_URL . "upload/" . $value['image'] ?>" alt="Just a flower" class="h-full w-full object-fill rounded-2xl" />
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
                                <div class="mt-1 flex items-center justify-between">
                                    <span class="text-base text-yellow-600 font-normal"><?= $value['price'] ?> VNĐ</span>
                                    <span class="text-xs text-black-400">Đã bán: <?= $value['quantity_sold'] ?></span>
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
</div>

<div id="toast-fav1" style="transform: translateX(-50%);" class="hidden z-50 fixed top-0 left-2/4 -translate-x-2/4 flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div id="toast-conten-fav" class="ml-3 text-sm font-normal"></div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </button>
</div>

<script type="module">
    import {
        handleFavourite
    } from "./src/js/global.js"

    $(document).ready(function() {
        const toast = document.getElementById('toast-fav1');
        const toastContetn = document.getElementById('toast-conten-fav');
        const btnFavs = document.querySelectorAll('.btn-fav')
        const loading = `<div class="flex items-center justify-center absolute left-2/4 top-2/4" role="status">
        <svg aria-hidden="true" class="mr-2 w-12 h-12 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="red" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>`

        async function request(data) {
            $('#list-filter').html(loading)
            $.ajax({
                url: 'handleAjax.php?filter',
                method: 'GET',
                data
            }).done((result) => {
                $('#list-filter').html(result);
                return result
            })
        }
        $('#btn-filter').click(async () => {
            if ($('#small-price').val() != '' && $('#big-price').val() != '') {
                await request({
                    id: <?= $_GET['id'] ?>,
                    smallPrice: $('#small-price').val(),
                    bigPrice: $('#big-price').val()
                })
                $('#cleatFilter').removeClass('hidden')
            } else {
                window.location.reload();
            }
        })

        $('#cleatFilter').click(function() {
            window.location.reload();
        })

        $('#prdNew').click(function() {
            $('#prdNew').addClass('bg-red-500 text-white')
            $('#prdSell').removeClass('bg-red-500 text-white')

            request({
                id: <?= $_GET['id'] ?>,
                smallPrice: $('#small-price').val(),
                bigPrice: $('#big-price').val()
            })
        })
        $('#prdSell').click(function() {
            $('#prdSell').addClass('bg-red-500 text-white')
            $('#prdNew').removeClass('bg-red-500 text-white')
            request({
                id: <?= $_GET['id'] ?>,
                smallPrice: $('#small-price').val(),
                bigPrice: $('#big-price').val(),
                selling: true
            })
        })

        handleFavourite(btnFavs, toast, toastContetn);
    })
    // console.log(btnFavs)
</script>