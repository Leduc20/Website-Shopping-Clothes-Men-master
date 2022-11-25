<section class="bg-gray-100 py-8">
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-full bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Giỏ hàng</h1>
                    <!-- count product in cart -->
                    <h2 class="font-semibold text-2xl">3 Items</h2>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Sản phẩm</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Số lượng
                    </h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Giá</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Tổng</h3>
                </div>
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-2/5">
                        <!-- product -->
                        <div class="w-20">
                            <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z"
                                alt="">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">Iphone 6S</span>
                            <span class="text-red-500 text-xs">Apple</span>
                            <div></div>
                        </div>
                    </div>
                    <div class="flex justify-center w-1/5">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                            <button data-action="decrement"
                                class=" bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <input type="number"
                                class="outline-none focus:outline-none text-center w-full bg-gray-100 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                name="custom-input-number" value="1" min="0"></input>
                            <button data-action="increment"
                                class="bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                        <!--  -->
                    </div>
                    <span class="text-center w-1/5 font-semibold text-sm">$400.00</span>
                    <span class="text-center w-1/5 font-semibold text-sm">$400.00</span>
                </div>
                <script>
                function decrement(e) {
                    const btn = e.target.parentNode.parentElement.querySelector(
                        'button[data-action="decrement"]'
                    );
                    const target = btn.nextElementSibling;
                    let value = Number(target.value);
                    value--;
                    target.value = value;
                }

                function increment(e) {
                    const btn = e.target.parentNode.parentElement.querySelector(
                        'button[data-action="decrement"]'
                    );
                    const target = btn.nextElementSibling;
                    let value = Number(target.value);
                    value++;
                    target.value = value;
                }

                const decrementButtons = document.querySelectorAll(
                    `button[data-action="decrement"]`
                );

                const incrementButtons = document.querySelectorAll(
                    `button[data-action="increment"]`
                );

                decrementButtons.forEach(btn => {
                    btn.addEventListener("click", decrement);
                });

                incrementButtons.forEach(btn => {
                    btn.addEventListener("click", increment);
                });
                </script>


                <div class="flex justify-between pt-4 items-center">
                    <div>
                        <a href="<? ADMIN_BASE . ""?>" class="flex font-semibold text-indigo-600 text-sm">
                            <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                                <path
                                    d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                            </svg>
                            Tiếp tục mua hàng
                        </a>
                    </div>
                    <div class="flex space-x-3 font-bold text-xl uppercase">
                        <span>Thành tiền</span>
                        <span>$600</span>
                    </div>
                </div>
                <div class="border-t mt-8">
                    <button
                        class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">
                        Thanh toán
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>