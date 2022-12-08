$(document).ready(function () {
    function getAllCmts() {
        $.ajax({
            url: "handleAjax.php?comment",
            type: "get",
            data: {
                product_id: $("#data-product").attr("data-id"),
            },
        }).done(function (results) {
            $("#list-cmt").html(results);
        });
    }

    getAllCmts();

    $("#comment-value").on("input", (e) => {
        console.log(e.target.value);
        if (e.target.value != "") {
            $("#btn-cmt").attr("disabled", false);
        } else {
            $("#btn-cmt").attr("disabled", true);
        }
    });

    $("#btn-cmt").click(function () {
        $.ajax({
            url: "handleAjax.php?comment",
            type: "post",
            data: {
                content: $("#comment-value").val(),
                product_id: $("#data-product").attr("data-id"),
            },
        }).done(function (results) {
            $("#comment-value").val("").focus();
            getAllCmts();
        });
    });
});
