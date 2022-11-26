import { cartCount, carts, renderCart, DOMAIN } from "./global.js";

const btnSubMidCart = document.getElementById("submid-cart");
const formSubMidCart = document.getElementById("form-container");

const html = (prd) => {
    return `
    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
   
    <input  name="prdId[]" value="${
        prd.id
    }" type="checkbox" class="font-semibold text-gray-600 text-xs uppercase w-1/5">
   
    <div class="flex w-2/5">
      <!-- product -->
      <div class="w-20">
        <img class="h-24" src="${prd.image}" alt="">
      </div>
      <div class="flex flex-col justify-between ml-4 flex-grow">
        <span class="font-bold text-sm">${prd.name}</span>
        <span class="text-red-500 text-xs">Nike</span>
        Size:<input name="size[]" class="text-red-500 text-xs outline-none" value="${prd.size}" readonly>
        Màu: <input name="color[]" class="text-red-500 text-xs outline-none" value="${prd.color}" readonly>
        <div></div>
      </div>
    </div>
    <div class="flex justify-center w-1/5">
      <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
        <button type="button" data-action="decrement"
          class=" bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
          <span class="m-auto text-2xl font-thin">−</span>
        </button>
        <input  type="number"
          class="outline-none focus:outline-none text-center w-full bg-gray-100 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
          name="sl[]" value="${prd.sl}" min="0" disabled></input>
        <button type="button" data-action="increment"
          class="bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
          <span class="m-auto text-2xl font-thin">+</span>
        </button>
      </div>
      <!--  -->
    </div>
    <span class="text-center w-1/5 font-semibold text-sm">$ <span class="prd-price">${prd.price}</span></span>
    <span class=" text-center w-1/5 font-semibold text-sm">$ <span class="prd-total">${prd.sl * prd.price}</span></span>
    <button type="button"   data-id="${
        prd.id
    }" name="btn-remove-prd" class="text-center w-1/5 font-semibold text-sm">Xóa</button>
  </div>`;
};

if (carts.length > 0) {
    renderCart({
        id: "cart-list",
        data: carts,
        html: html,
    });
}

// Tăng giảm số lượng sp
const decrementButtons = document.querySelectorAll(`button[data-action="decrement"]`);
const incrementButtons = document.querySelectorAll(`button[data-action="increment"]`);

decrementButtons.forEach((btn) => {
    btn.onclick = () => {
        const btnEl = btn.parentNode.parentNode.querySelector('button[data-action="decrement"]');
        const price = btn.parentNode.parentNode.parentNode.querySelector(".prd-price ").textContent;
        const prdTotal = btn.parentNode.parentNode.parentNode.querySelector(".prd-total");
        const id = btn.parentNode.parentNode.parentNode.querySelector('input[name = "prdId[]"]').value;
        const target = btnEl.nextElementSibling;

        let value = Number(target.value);
        value--;
        if (value > 0) {
            const prd = carts.find((item) => item.id == id);
            prd.sl = value;
            localStorage.setItem("carts", JSON.stringify(carts));
            target.value = value;
            prdTotal.innerHTML = value * price;
            handleTotalCart();
        } else {
        }
    };
});

incrementButtons.forEach((btn) => {
    btn.onclick = () => {
        const btnEl = btn.parentNode.parentNode.querySelector('button[data-action="decrement"]');
        const price = btn.parentNode.parentNode.parentNode.querySelector(".prd-price ").textContent;
        const prdTotal = btn.parentNode.parentNode.parentNode.querySelector(".prd-total");
        const id = btn.parentNode.parentNode.parentNode.querySelector('input[name = "prdId[]"]').value;
        const target = btnEl.nextElementSibling;
        let value = Number(target.value);
        value++;

        const prd = carts.find((item) => item.id == id);
        prd.sl = value;
        localStorage.setItem("carts", JSON.stringify(carts));
        target.value = value;
        prdTotal.innerHTML = value * price;
        handleTotalCart();
    };
});

const handleRemovePrd = () => {
    const btnRmPrds = document.getElementsByName("btn-remove-prd");
    btnRmPrds.forEach((btnRmPrd) => {
        btnRmPrd.onclick = () => {
            const prdRm = carts.findIndex((prd) => prd.id == btnRmPrd.getAttribute("data-id"));
            const isRemove = confirm("Bạn có chắc muốn xóa sản phẩm này không hở!!!");
            if (isRemove) {
                carts.splice(prdRm, 1);
                cartCount.textContent = carts.length;
                localStorage.setItem("carts", JSON.stringify(carts));
                renderCart({
                    id: "cart-list",
                    data: carts,
                    html: html,
                });
                handleRemovePrd();
                handleTotalCart();
            }
        };
    });
};
handleRemovePrd();

// SELECT All
const checkPrdAllEl = document.getElementById("check-full-prd");
const prdCheckEls = document.getElementsByName("prdId[]");

checkPrdAllEl.onchange = () => {
    prdCheckEls.forEach((el) => {
        el.checked = checkPrdAllEl.checked;
    });
    const amountPrd = document.querySelectorAll('input[name="sl[]"]');
    amountPrd.forEach((el) => (el.disabled = !checkPrdAllEl.checked));
    handleTotalCart();
    btnSubMidCart.disabled = !checkPrdAllEl.checked;
};

prdCheckEls.forEach((el) => {
    el.onchange = () => {
        const amountCheck = document.querySelectorAll('input[name="prdId[]"]:checked').length;
        const amountPrd = el.parentNode.querySelector('input[name="sl[]"]');
        const isCheckAll = prdCheckEls.length === amountCheck;
        checkPrdAllEl.checked = isCheckAll;

        amountPrd.disabled = !el.checked;

        if (amountCheck > 0) {
            btnSubMidCart.disabled = false;
        } else {
            btnSubMidCart.disabled = true;
        }
        handleTotalCart();
    };
});

function handleTotalCart() {
    let total = 0;
    const prdTotalEls = document.querySelectorAll('input[name="prdId[]"]:checked');
    prdTotalEls.forEach((el) => {
        const prdTotal = el.parentNode.querySelector(".prd-total").textContent * 1;
        total += prdTotal;
    });

    totalCart({ prdAmount: prdTotalEls.length, prdTotal: total });
}

// // TOTAL CART

const totalCart = function ({ prdAmount = 0, prdTotal }) {
    const totalEl = document.getElementById("total");
    totalEl.innerHTML = `Tổng thanh toán (<span id="product-amount">${prdAmount}</span> sản phẩm) : $ <input  class="outline-none min-w-5" name="total" value="${prdTotal}" id="product-total" readonly> `;
};

// SubMid giỏ hàng

btnSubMidCart.onclick = (e) => {
    formSubMidCart.submit();
};
