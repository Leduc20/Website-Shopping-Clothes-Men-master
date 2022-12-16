<?php
session_start();
error_reporting(0);
require_once '../model/pdo.php';
require_once '../global.php';
if (isset($_GET['vnp_Amount'])) {
    // var_dump($_GET);
    $vnp_Amount = $_GET['vnp_Amount'];
    $vnp_BankCode = $_GET['vnp_BankCode'];
    $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
    $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
    $vnp_TmnCode = $_GET['vnp_TmnCode'];
    $vnp_PayDate = $_GET['vnp_PayDate'];
    $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
    $vnp_CardType = $_GET['vnp_CardType'];
    $code_cart = $_SESSION['code_cart'];

    $goBack = SITE_URL;
    if (isset($vnp_BankTranNo)) {
        $sql = "INSERT INTO vnpay(`vnp_amount`, `vnp_bankCode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_payDate`, `vnp_tmnCode`, `vnp_transactionNo`, `code_cart`) VALUES ('$vnp_Amount','$vnp_BankCode','$vnp_BankTranNo','$vnp_CardType','$vnp_OrderInfo','$vnp_PayDate','$vnp_TmnCode','$vnp_TransactionNo','$code_cart')";
        $cart_query = $sql;
        pdo_execute($cart_query);
        echo '
            <div class="bg-gray-100 h-screen">
            <div class="bg-white p-6  md:mx-auto">
                <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                    <path fill="currentColor"
                        d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                    </path>
                </svg>
                <div class="text-center">
                    <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Payment Done!</h3>
                    <p class="text-gray-600 my-2">Cảm ơn bạn đã hoàn thành thanh toán trực tuyến an toàn của mình..</p>
                    <p> Have a great day! </p>
                    <div class="py-10 text-center">
                        <a href="' . $goBack . '" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                            GO BACK
                        </a>
                    </div>
                </div>
            </div>
        </div>
    ';
    } else {
        echo '<div class="bg-gray-100 h-screen">
        <div class="bg-white p-6 text-center mx-auto">
            <img class="m-auto w-[65px]" src="../public/icon/error-10379.svg" alt="">
            <div class="text-center">
                <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">
                    Payment Failed!</h3>
                <p class="text-gray-600 my-2">Cảm ơn bạn đã hoàn thành thanh toán trực tuyến an toàn của mình..</p>
                <p> Have a great day! </p>
                <div class="py-10 text-center">
                <a href="' . $goBack . '" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                GO BACK
            </a>
            </div>
        </div>
    </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

</body>

</html>