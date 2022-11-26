<?php
var_dump($_POST);
?>

<form class="" action="<?= SITE_URL ?>?purchase" method="post">
    <div class="product">
        <?php foreach (array_values($_POST) as $key => $value) : ?>
            <?= $value['sl'] ?>
        <?php endforeach ?>
    </div>

    <div class="info flex flex-col">
        <input type="text" name="name" placeholder="Mời nhập tên người nhận ">
        <input type="text" name="location" placeholder="Mời nhập địa chỉ giao hàng">
        <input type="text" name="phone" placeholder="Mời nhập số điện thoại">
    </div>

    <button class="" type="submit">Xác nhận đặt hàng</button>
</form>