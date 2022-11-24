export const DOMAIN = "http://localhost:8080/webshop/";
export const cartCount = document.querySelector(".cart-count");
export const carts = JSON.parse(localStorage.getItem("carts")) || [];

export const renderCart = ({ id, data = [], html }) => {
    const elm = document.getElementById(id);

    if (data.length === 0) {
        return (elm.innerHTML = `Bạn chưa có sản phẩm nào trong giỏ hàng vui lòng chọn sản phẩm
    <a href="${DOMAIN}">Xem sản phẩm</a>`);
    }

    const htmls = data.map((item) => html(item));
    elm.innerHTML = htmls.join("");
};

