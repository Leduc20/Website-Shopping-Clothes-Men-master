<div class="">    

    <div class="justify-end flex">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Percent'],
          ['Giao Hàng Thành Công',     11],
          ['Đang Xử Lý',      2],
          ['Đơn Hủy',  2],
          ['Đơn Đang Xử Lý', 2],
          ['Đơn Hoàn',    7]
        ]);
        
        var options = {
          title: 'Hiệu Suất Bán Hàng',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  
    <div id="piechart_3d" style="width: 700px; height: 500px;" class="ml-20"></div>
    </div>  
    <div class="pl-32 grid grid-cols-2 gap-4">
        <div class=" cols-span-1 w-[350px] h-[200px] rounded rounded-4 bg-green-500 drop-shadow-2xl	 ">
            <h1 class="justify-center flex font-bold text-3xl mt-4 text-green-600">Đơn Hàng Được Giao</h1>
            <div class=" text-[40px] mt-4 justify-center flex text-green-600 underline font-bold">  0 </div>
        </div>
        <div class=" cols-span-1 w-[350px] h-[200px] rounded rounded-4 bg-yellow-400 drop-shadow-2xl	 ">
            <h1 class="justify-center flex font-bold text-3xl mt-4 text-yellow-500">Đơn Hàng Đang Xử Lý</h1>
            <div class=" text-[40px] mt-4 justify-center flex text-yellow-500 underline font-bold">  0 </div>
        </div>
    </div>
    <div class="justify-center flex pl-32 pt-10">
        <div class=" cols-span-1 w-[350px] h-[200px] rounded rounded-4 bg-red-500 drop-shadow-2xl "> 
            <h1 class="justify-center flex font-bold text-3xl mt-4 text-red-600">Đơn Hàng Bị Hủy</h1>
            <div class=" text-[40px] mt-4 justify-center flex text-red-600 underline font-bold">  0 </div>
        </div>
    </div>

   
  

</div>
