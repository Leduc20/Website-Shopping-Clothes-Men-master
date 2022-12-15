<div class="px-2 container mx-auto mb-4 flex justify-center flex-col w-8/12">
    <div class="border border-gray-400 mb-2">
        <div class="flex justify-between space-x-4 w-full">
            <a href="<?= SITE_URL ?>?purchase&type=all" class="<?php if (!isset($_GET['type']) || $_GET['type'] == 'all') echo 'text-red-500' ?> p-4 px-12 hover:text-red-500">Tất cả</a>
            <a href="<?= SITE_URL ?>?purchase&type=wait" class="<?php if (isset($_GET['type']) && $_GET['type'] == 'wait') echo 'text-red-500' ?> p-4 px-12 hover:text-red-500">Chờ xác nhận</a>
            <a href="<?= SITE_URL ?>?purchase&type=shipping" class="<?php if (isset($_GET['type']) && $_GET['type'] == 'shipping') echo 'text-red-500' ?> p-4 px-12 hover:text-red-500">Đang giao</a>
            <a href="<?= SITE_URL ?>?purchase&type=done" class="<?php if (isset($_GET['type']) && $_GET['type'] == 'done') echo 'text-red-500' ?> p-4 px-12 hover:text-red-500">Đã giao</a>
            <a href="<?= SITE_URL ?>?purchase&type=cancel" class="<?php if (isset($_GET['type']) && $_GET['type'] == 'cancel') echo 'text-red-500' ?> p-4 px-12 hover:text-red-500">Đã hủy</a>
        </div>
    </div>
    <div class="mt-2 border">
        <?php if (count($results) == 0) echo "<p>Chưa có thông tin về đơn hàng của bạn</p>" ?>
        <?php foreach ($results  as $key => $value) : ?>

            <div class="p-4 pt-0 border-b-2 relative">
                <!--  -->
                <div class="flex justify-end items-center">
                    <span class="mr-4 text-sm text-yellow-500"><?= $value['updated_at'] ?></span>
                    <div class="">
                        <?php if (strtolower($value['status']) == 'chờ xác nhận') echo '
                    <div class="text-orange-400  bg-blue-100 p-2 rounded-bl-md">
                        <i class="fa-regular fa-clock"></i>
                        <span>Chờ xác nhận</span>
                    </div>' ?>

                        <?php if (strtolower($value['status']) == 'đã hủy') echo '
                    <div class="text-red-500 bg-blue-100 p-2 rounded-bl-md">
                        <i class="fa-solid fa-xmark"></i>
                        <span>Đã hủy</span>
                    </div> ' ?>

                        <?php if (strtolower($value['status']) == 'đang giao hàng') echo '
                     <div class="text-[#71C0D0] bg-blue-100 p-2 rounded-bl-md">
                        <i class="fa-solid fa-truck-fast"></i>
                        <span>Đang giao hàng</span>
                    </div> ' ?>

                        <?php if (strtolower($value['status']) == 'giao hàng thành công') echo '
                     <div class="text-green-400 bg-blue-100 p-2 rounded-bl-md">
                        <i class="fa-solid fa-check"></i>
                        <span>Giao hàng thành công</span>
                    </div>' ?>
                    </div>
                </div>
                <!--  -->
                <?php foreach ($value['products'] as $key2 => $value2) : ?>

                    <div class="list-product w-full">
                        <div class="mt-2 flex w-full">
                            <div class="border p-2 rounded">
                                <img src="../upload/<?= $value2['image'] ?>" alt="" class="w-24 h-24">
                            </div>
                            <div class="ml-4 flex justify-between items-center w-full">
                                <div class="flex-1">
                                    <p class="">
                                        <?= $value2['name'] ?>
                                    </p>
                                    <div class="text-xs text-gray-500">
                                        <p class="my-1">
                                            <span>Size: </span> <span><?= $value2['size'] ?></span>
                                            <!--  -->
                                            <span>
                                                &nbsp
                                            </span>
                                            <!--  -->
                                            <span>Màu: </span> <span><?= $value2['color'] ?></span>
                                        </p>
                                        <p class="my-1">
                                            Số lượng: <span> <?= number_format($value2['amount']) ?></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="text-base text-red-400 font-semibold mr-4">
                                    Giá tiền: <?= number_format($value2['price']) ?> vnđ
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

                <div class="mt-2 flex justify-between items-center">
                    <span class="text-sm text-yellow-500">Ngày đặt hàng: <?= $value['created_at'] ?></span>
                    <div class="">
                        <?php if ($value['status'] == 'chờ xác nhận') { ?>
                            <form class="contents" action="" method="post">

                                <input type="hidden" name="order_id" value="<?php echo $value['orderId'] ?>">
                                <button type="submit" name="huy-prd" class="px-4 ml-4 py-1.5 bg-red-600 text-white rounded hover:bg-red-500">Hủy đơn hàng</button>
                            </form>
                        <?php } ?>
                        <span class="ml-6 text-lg font-semibold">Tổng số tiền: <span class="text-green-500"><?= number_format($value['totalMoney']) ?> VND</span></span>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>