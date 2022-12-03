 
 <style>
        .icon{
            cursor: pointer;
            margin: 5px;
            position: relative;
            text-decoration: none;
            list-style: none;
            
        }
        .icon i{
            height: 40px;
            width: 60px;
            border-radius: 50%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            margin-left:4px;
            justify-content: center;
            align-items: center;
        }
        .icon .tooltip{
            position: relative;
            top: 0%;
            left: 100%;
            transform:translate(-50%);
            padding: 0px 0px;
            color: black;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            opacity: 0; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 25px;
            pointer-events: none;
        }
        .icon .tooltip:before{
            position: absolute;
            width: 35px;
            color: black;
        }
        .tooltip,.icon i{
            transition: 0.3s;
        }
        
        .icon:hover .tooltip{
            opacity: 2;
            pointer-events: auto;
            top: -30px;
            left: 110px;
        }   
        
 </style>
 <div  class=" w-[70px] h-[700px] bg-gray-200 rounded-r-3xl ">

        <a href="<?= SITE_URL . "?list-danh-muc"?>" class="icon ">
        <i class="fa-solid fa-house"></i>
        <span class="tooltip -1">Website </span></a>

        <a href="index.php" class="icon ">
        <i class="fa-solid fa-store"></i>
        <span class="tooltip">Home </span></a>

        <a href="<?= ADMIN_BASE . "?danh-muc" ?>" class="icon ">
        <i class="fa-solid fa-list"></i>    
        <span class="tooltip">Category </span></a>

        <a href="<?= ADMIN_BASE . "?san-pham"?>" class="icon ">
        <i class="fa-solid fa-cart-shopping"></i>
        <span class="tooltip">Product </span></a>

        <a href="<?= ADMIN_BASE . "?khach-hang"?>" class="icon ">
        <i class="fa-solid fa-users"></i>
        <span class="tooltip">Customer </span></a>

        <a href="" class="icon ">
        <i class="fa-solid fa-comments"></i>
        <span class="tooltip">Comment </span></a>

        <a href="" class="icon ">
        <i class="fa-solid fa-chart-simple"></i>
        <span class="tooltip">Statistical </span></a>

        <a href="index.php?act=thoat" class="icon ">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <span class="tooltip">Log Out </span></a>
        </div>
        
    <!-- <ul>
        <li class="pt-3 ">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex " href=""><i class=" mt-1 mr-2 ml-1"></i> <span> Trở về Website </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="index.php"><i class=" mt-1 mr-2 ml-1"></i> <span> Trang chủ </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href=""><i class=" mt-1 mr-2 ml-1"></i> <span> Loại hàng </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href=""><i class=" mt-1 mr-2 ml-1"></i> <span> Hàng hóa </span></a>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href=""><i class=" mt-1 mr-2 ml-1"></i> <span> Khách hàng </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="index.php?act=dsbl"><i class=" mt-1 mr-2 ml-1"></i> <span> Bình luận </span></a>
        </li>
        <li class="">
            <a class=" no-underline text-white pt-3 hover:bg-gray-700   flex  " href="index.php?act=dstk"><i class=" mt-1 mr-2 ml-1"></i> <span> Thống kê </span></a>
        </li>
    </ul> -->
    
        


        



