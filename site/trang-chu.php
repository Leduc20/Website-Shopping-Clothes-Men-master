<!-- banner, slide -->

<div class="carousel relative container mx-auto" style="max-width: 1600px">
    <div class="carousel-inner relative overflow-hidden w-full">
        <!--Slide 1-->
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked" />
        <div class="carousel-item absolute opacity-0" style="height: 50vh">
            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="
              background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');
            ">
                <div class="container mx-auto">
                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                        <p class="text-black text-2xl my-4">
                            Stripy Zig Zag Jigsaw Pillow and Duvet Set
                        </p>
                        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="" />
        <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height: 50vh">
            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="
              background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');
            ">
                <div class="container mx-auto">
                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                        <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="" />
        <div class="carousel-item absolute opacity-0" style="height: 50vh">
            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="
              background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');
            ">
                <div class="container mx-auto">
                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                        <p class="text-black text-2xl my-4">
                            Brown and blue hardbound book
                        </p>
                        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
            </li>
        </ol>
    </div>
</div>

<section class="bg-white py-8">
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <div id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">
                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl" href="#">

                    Sản phẩm
                    <div class="h-1 w-full bg-indigo-500 rounded"></div>
                </a>
            </div>
        </div>
        <!-- show product -->
        <!--  -->
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
                        </form>
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
    </div>
</section>


<div id="toast-fav" style="transform: translateX(-50%);" class="hidden absolute top-0 left-2/4 -translate-x-2/4 flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
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

<script>
    const toast = document.getElementById('toast-fav');
    const toastContetn = document.getElementById('toast-conten-fav');
    const btnFavs = document.querySelectorAll('.btn-fav')

    btnFavs.forEach((btnFav) => {
        btnFav.onclick = (e) => {
            // e.preventDefault();
            if (btnFav.name == 'add_fav') {
                toastContetn.textContent = 'Thêm vào list thành công'
            }
            if (btnFav.name == 'remove_fav') {
                toastContetn.textContent = 'Xóa khỏi list thành công'
            }

            toast.classList.remove('hidden', "opacity-0")
            const _result = setTimeout(() => {
                toast.classList.add('hidden')
                clearTimeout(_result)
            }, 2000)
        }
    })
    // console.log(btnFavs)
</script>