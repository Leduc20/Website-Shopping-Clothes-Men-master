export const DOMAIN = "http://localhost:/webbanhang/";
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

export const handleFavourite = (btnFavs, toast, toastContetn) => {
    btnFavs.forEach((btnFav) => {
        btnFav.onclick = (e) => {
            e.preventDefault();

            if ($("#user-id").attr("data-userId") == "null") {
                window.location = "<?= AUTH_BASE ?>?login";
                return;
            }

            $.ajax({
                url: "handleAjax.php?favourite",
                type: "post",
                // dataType: 'html',
                data: {
                    type: btnFav.name,
                    prdId: btnFav.getAttribute("data-prdId"),
                    favId: btnFav.getAttribute("data-favId"),
                },
            }).done(function (results) {
                if (btnFav.name == "add_fav") {
                    btnFav.name = "remove_fav";
                    btnFav.nextElementSibling.textContent = "Xóa khỏi list yêu thích";
                    btnFav.setAttribute("data-favId", results);
                    btnFav.querySelector(".tymPrd").style.fill = "red";
                    toastContetn.textContent = "Thêm vào list thành công";
                    return;
                }
                if (btnFav.name == "remove_fav") {
                    btnFav.name = "add_fav";
                    btnFav.nextElementSibling.textContent = "Thêm vào list yêu thích";
                    btnFav.querySelector(".tymPrd").style.fill = "none";
                    toastContetn.textContent = "Xóa khỏi list thành công";
                    return;
                }
            });

            toast.classList.remove("hidden", "opacity-0");
            const _result = setTimeout(() => {
                toast.classList.add("hidden");
                clearTimeout(_result);
            }, 2000);
        };
    });
};
