<div class="justify-center flex mt-3 mb-3 border-b p-3">
    <img src="../site/src/img/logo_2.png" alt="" class="h-10 mx-2" />
    <span class="font-semi text-2xl"> RANI </span>
</div>
           <div class="dropdown ml-9 w-[250px]">
                <span class="btn btn-secondary  bg-gray-600 dropdown-toggle w-[250px]" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

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

