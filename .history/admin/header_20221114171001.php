<div class="flex justify-end">
            <form action="">
                <span class="text-white text-[21px]">Cửa Hàng</span>
                <select name="" id="" class="border-[1px] w-[160px] rounded-[5px]">
                    <option value="">Cửa Hàng</option>
                    <option value="">A</option>
                    <option value="">b</option>
                    <option value="">c</option>
                </select>
            </form>
            <div class="dropdown ml-9 w-[250px]">
                <span class="btn btn-secondary dropdown-toggle w-[250px]" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    Xin Chào,<?php
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                    echo '<span class="">' . $name . '</span>';
                                }

                                ?>
                </span>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>Tài khoản</a></li>
                    <li><a class="dropdown-item" href="index.php?act=thoat"><i class="fa-solid fa-arrow-right-from-bracket"></i>Thoát</a></li>

                </ul>
            </div>
        </div>