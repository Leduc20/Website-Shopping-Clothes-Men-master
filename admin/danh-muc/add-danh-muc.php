<<<<<<< HEAD
<div class="ml-60  ">
    <form class="bg-gray-50 py-3 rounded" action="<?= ADMIN_BASE . "?add-danh-muc" ?>" method="post" id="check-line"
        enctype="multipart/form-data">
        <div class="font-bold px-2 py-2 ml-2 mb-1 "> Mã loại </div>
        <input class="border w-[340px] px-2 ml-4 py-2 rounded-[4px]" disabled placeholder="Không cần nhập" type="text"
            name="" id="">
        <div class="font-bold px-2 ml-2 mb-1 mt-3"> Tên loại </div>
        <input class="border w-[340px] px-2 ml-4 py-2 mt-1 mb-2  rounded-[4px]" type="text" name="tenloai" id="tenloai">
        <br>
        <!-- <button type="submit" class="p-2 rounded border mt-3">Thêm mới</button> -->
        <!-- <button type="submit" name="themmoi">Thêm mới</button> -->

        <div class="mt-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
                type="submit" name="themmoi">
                Thêm mới
            </button>

            <button type="reset"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập
                lại</button>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline"
                href="<?= ADMIN_BASE . "?danh-muc" ?>">Danh sách</a>
=======
<div class="mr-10 ">
    <form class=" bg-gray-100 py-3 rounded place-items-center justify-center flex " action="<?= ADMIN_BASE . "?add-danh-muc" ?>" method="post" id="check-line" enctype="multipart/form-data">
    <div class="">    
        <div class="font-bold mb-1 "> Mã Loại </div>
            <input class="border mb-1 p-1  rounded-[4px] " disabled placeholder="" type="text" name="" id="" value>
            
            <div class="font-bold mt-2 mb-1"> Tên loại </div>
            <input class="border mb-1 p-1  rounded-[4px]" type="text" name="tenloai" required id="add"> 
            <p id="inform" class="text-red-500"></p>
            <script>
                function myFunction(){
                let x = document.getElementById("add").value;
                let text;
                if (isNaN(x) || x < 1 ) {
                    text = "Bạn Chưa Nhập Tên Loại";
                }
                document.getElementById("inform").innerHTML = text;
                }
            </script>

            <div class="mt-4 justify-center flex">
        <button onclick="myFunction()"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="themmoi">
            Thêm mới
        </button>

            <button onclick="reset" type="reset" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="<?= ADMIN_BASE . "?danh-muc" ?>">Danh sách</a>
>>>>>>> f87a2107e89dc3a3a94d1fe4bf10c00dc19c543f
        </div>
        </div> 
    
    </form>
</div>
</form>