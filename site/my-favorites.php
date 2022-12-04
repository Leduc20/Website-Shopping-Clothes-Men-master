<div class="px-4">
    <div class="">
        Sản phẩm yêu thích của tôi
    </div>

    <div class="mt-3 grid grid-cols-4 gap-10 px-4">
        <?php if (count($products) == 0) { ?>
            <p>Bạn chưa có sản phẩm yêu thích nào
                <a href="<?= SITE_URL ?>" class="">Tiếp tục xem sản phẩm</a>
            </p>
        <?php } ?>
        <?php foreach ($products as $key => $value) : ?>
            <div class="max-w-md w-full bg-gray-100 shadow-lg rounded-xl p-6">
                <div class="relative">
                    <form action="<?= SITE_URL ?>?my-favorites" method="POST">
                        <input type="hidden" name="product_id" value="<?= $value['id'] ?>">
                        <div x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="absolute flex flex-col top-0 right-0 p-3">
                            <button name="remove-favorite" type="submit" class="transition ease-in duration-300 bg-white hover:text-red-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1" onclick="return confirm('Bạn có chắc chắn muốn xóa khỏi sản phẩm yêu thích không hở!!!')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="red" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                            <div value="id" x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.300ms class="flex items-center justify-center absolute -right-2 top-10 w-60 mt-2 bg-white rounded-md shadow-xl">
                                Gỡ hỏi list yêu thích
                            </div>
                        </div>
                    </form>
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
                            <div class="text-lg text-black-600 font-normal mt-1">
                                $ <?= $value['price'] ?>
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

<script>

</script>


<!-- $arr = [
    
    [
        'id' => 1,
        'title' => 'title 1',
        'product_name'=> 'giày'
        'color' => 'green',
    ],

    [
        'id' => 1,
        'title' => 'title 1',
        'product_name'=> 'giày'
        'color' => 'vàng',
    ],

    [
        'id' => 2,
        'title' => 'title 2',
        'product_name'=> 'mũ'
        'color' => 'xanh',
    ],

    [
        'id' => 2,
        'title' => 'title 2',
        'product_name'=> 'mũ'
        'color' => 'đỏ',
    ]
    
]; -->

<!-- 
$result = [
    
    [
        'id' => 1,
        'title' => 'title 1',
        'product_name'=> 'giày'
        'color' => 
            [
                '0'=> 'green',
                '1'=> 'vàng'    
            ]
        ,
    ],

    [
        'id' => 2,
        'title' => 'title 2',
        'product_name'=> 'mũ'
        'color' =>
            [
                '0'=> 'xanh',
                '1'=> 'đỏ'    
            ]
        ,
    ]
    
]; -->