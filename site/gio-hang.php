<section class="bg-gray-100 py-8">
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-full bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Giỏ hàng</h1>
                    <!-- count product in cart -->
                    <!-- <h2 class="font-semibold text-2xl">3 Items</h2> -->
                </div>
                <div class="flex mt-10 mb-5">
                    <input id="check-full-prd" type="checkbox" class="font-semibold text-gray-600 text-xs uppercase w-1/5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Sản phẩm</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Số lượng
                    </h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Giá</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Tổng</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Options</h3>
                </div>

                <form id="form-container" method="post" action="<?= SITE_URL ?>?dat-hang">
                    <div id="cart-list">

                    </div>

                    <div class="flex justify-between pt-4 items-center">
                        <div>
                            <a href="#" class="flex font-semibold text-indigo-600 text-sm">
                                <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                                    <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                                </svg>
                                Tiếp tục mua hàng
                            </a>
                        </div>
                        <div class="flex space-x-3 font-bold text-xl uppercase">
                            <span>Thành tiền</span>
                            <span  id="total">Tổng thanh toán (<span id="product-amount">0</span> sản phẩm) : $
                                <span name="total" id="product-total">0</span>
                                <span>
                        </div>
                    </div>
                </form>

                <div class="border-t mt-8">
                    <button id="submid-cart" class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full" disabled>
                        Thanh toán
                    </button>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>

<script type="module" src="./src/js/cart.js"></script>