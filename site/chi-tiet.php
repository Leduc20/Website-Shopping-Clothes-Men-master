<!-- component -->

<section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="container px-5 py-24 mx-auto" id="data-product" data-id="<?= $product['id'] ?>" data-product='<?php echo json_encode($product); ?>'>
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="<?= BASE_URL . "upload/" . $product['image'] ?>">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?= $product['name'] ?></h1>
        <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
              </path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
              </path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
              </path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
              </path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
              </path>
            </svg>
            <span class="text-gray-600 ml-3">4 Reviews</span>
          </span>
          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                </path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                </path>
              </svg>
            </a>
          </span>
        </div>
        <p class="leading-relaxed"><?= $product['description'] ?></p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
          <div class="flex ml-6 items-center">
            <span class="mr-3">Màu</span>
            <div class="relative">
              <select id="color" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                <option>Đỏ</option>
                <option>Xanh</option>
                <option>Vàng</option>
                <option>Tím</option>
              </select>
              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
            </div>
          </div>

          <div class="flex ml-6 items-center">
            <span class="mr-3">Size</span>
            <div class="relative">
              <select id="size" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                <option>SM</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select>
              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
            </div>
          </div>

          <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent ml-4">
            <button type="button" data-action="decrement" class=" bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
              <span class="m-auto text-2xl font-thin">−</span>
            </button>
            <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-100 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" id="slPrd" name="sl" value="1" min="0"></input>
            <button type="button" data-action="increment" class="bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
              <span class="m-auto text-2xl font-thin">+</span>
            </button>
          </div>
        </div>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900"><?= $product['price'] ?> VNĐ</span>
          <button id="btn-add-prd" class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Mua
            hàng</button>
          <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
              </path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 container mx-auto " style="max-width: 950px;">
    <div class="px-4">
      <!-- form bình luận -->
      <!-- if mua hàng thì show form bình luân, else không show -->
      <?php if ($is_bought == 'login') { ?>
        <p>Vui lòng đăng nhập để thực hiện comment <a class="text-blue-500" href="<?= AUTH_BASE ?>?login">Login</a></A></p>
      <?php } ?>

      <?php if ($is_bought == 'watch') echo  '<p class="">Hãy mua hàng và cho chúng tôi biết trải nghiệm của bạn về sản phẩm của chúng tôi</p>' ?>

      <?php if ($is_bought == 'cmt') echo '<div class="mb-6">
        <h1 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Viết bình luận của bạn tại đây</h1>
        <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <label for="comment" class="sr-only">Your comment</label>
          <textarea id="comment-value" rows="2" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800" placeholder="Viết bình luận..." required></textarea>
        </div>
        <button disabled id="btn-cmt" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-primary-900 hover:bg-blue-800">
          Gửi bình luận
        </button>
      </div>' ?>

      <!-- show bình luận -->

      <div id="list-cmt" class="overflow-y-auto" style="max-height: 800px;">

      </div>

    </div>
  </section>
</section>

<!-- Toast -->

<div id="toast-success" style="transform: translateX(-50%);" class="hidden absolute top-0 left-2/4 -translate-x-2/4 flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
  <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Check icon</span>
  </div>
  <div class="ml-3 text-sm font-normal">Thêm sản phẩm thành công</div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
    </svg>
  </button>
</div>

<script src="./src/js/flowbite.js"></script>
<script type="module">
  import {
    cartCount,
    carts
  } from "./src/js/global.js";

  const el = document.getElementById("data-product");
  const toast = document.getElementById("toast-success")
  const btnAddPrd = document.getElementById("btn-add-prd")
  const data = JSON.parse(el.getAttribute("data-product"));
  const decrementButton = document.querySelector(`button[data-action="decrement"]`);
  const incrementButton = document.querySelector(`button[data-action="increment"]`);
  const slEl = document.querySelector('#slPrd')

  slEl.onchange = (e) => {
    if (slEl.value < 1) slEl.value = 1;
  }

  decrementButton.onclick = () => {
    const target = decrementButton.nextElementSibling;
    let value = Number(target.value);
    value--;
    if (value > 0) target.value = value;
  }

  incrementButton.onclick = () => {
    const target = decrementButton.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const {
    id,
    name,
    image,
    description,
    price
  } = data;

  function getValueSelect({
    id = null
  }) {
    const Ele = document.getElementById(id)
    let result = Ele.value

    Ele.onchange = (e) => {
      result = e.target.value
      getPrdCart()
    }
    return result;
  }

  function getPrdCart() {
    const color = getValueSelect({
      id: 'color'
    })
    const size = getValueSelect({
      id: 'size'
    })


    const product = {
      id,
      name,
      image,
      description,
      price,
      sl: slEl.value * 1,
      color,
      size
    };

    return product
  }

  btnAddPrd.onclick = () => {
    const product = getPrdCart()
    const {
      id,
      image,
      description,
      price,
      sl,
      color,
      size
    } = product

    const prdValid = carts.find((item) => item.id == product.id & item.size == product.size & item.color == product.color);

    if (prdValid) {
      const product = {
        id,
        name,
        image,
        description,
        price,
        sl: prdValid.sl * 1 + slEl.value * 1,
        color,
        size
      };
      const index = carts.findIndex(item => item.id == product.id)
      carts[index] = product
    } else {
      carts.unshift(product);
    }
    cartCount.textContent = carts.length;
    localStorage.setItem("carts", JSON.stringify(carts));
    toast.classList.remove('hidden', "opacity-0")
    const _result = setTimeout(() => {
      toast.classList.add('hidden')
      clearTimeout(_result)
    }, 2000)
  }
</script>
<script type="module" src="./src/js/comment.js"></script>