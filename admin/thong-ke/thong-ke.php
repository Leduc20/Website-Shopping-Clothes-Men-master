<form action="">
    <div>
        <div class="ml-2 mr-2 news overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th>

                        </th>
                        <th scope="col" class="py-3 px-2">
                            Mã loại
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Tên loại
                        </th>

                        <th scope="col" class="py-3 px-2">
                            Số lượng sản phẩm
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Giá thấp nhất
                        </th>
                        <th scope="col" class="py-3 px-2">
                            Giá cao nhất
                        </th>

                        <th scope="col" class="py-3 px-2">
                            Giá trung bình
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        echo '<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th>
                            <div class="">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            </div>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ' . $madm . '
                        </th>
                        <td class="py-4 px-2">
                        ' . $tendm . '
                        </td>
                        
                        <td class="py-4 px-2">
                        ' . $countsp . '
                        </td>
                        <td class="py-4 px-2">
                        ' . $minprice . '
                        </td>
                        
                        <td class="py-4 px-2">
                        ' . $maxprice . '
                        </td>
                        <td class="py-4 px-2">
                        ' . $avgprice . '
                        </td>
                        
                        
                        
                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- thong ke thu nhap -->
    <div class="float-left mt-4">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['created_at', 'totalMoney'],
                <?php
          foreach ($thunhap as $tkthunhap){
            echo "['" . $tkthunhap['created_at'] . "' , " . $tkthunhap['totalMoney'] . "],";
          }
         
           ?>
            ]);

            var options = {
                title: 'Thống kê thu nhập',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load("current", {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Element', 'Số Đơn Hàng', {
                    role: 'style'
                }],
                <?php
            
        foreach($dhthanhcong as $row){
            $data[] = $row;
            $sodh = (int)$row['sodh'];
            echo "['Giao Hàng Thành Công', $sodh, '#28a745'],";}
        
        foreach($dhdangxuly as $dangxuly){
            $data[] = $dangxuly;
            $sodh = (int)$dangxuly['sodh'];
            echo "['Đang xử lý', $sodh, '007bff'],";}
        foreach($dhdanggiao as $dangiao){
            $data[] = $dangiao;
            $sodh = (int)$dangiao['sodh'];
            echo "['Đang Giao', $sodh, '#ffc107'],";}
        foreach($dhhuy as $dhhuy){
            $data[] = $dhhuy;
            $sodh = (int)$dhhuy['sodh'];
            echo "['Đã Hủy', $sodh, '#dc3545'],";}    
            
        
            ?>
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                title: "Trạng thái đơn hàng",
                width: 550,
                height: 450,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
        </script>
        <div class="justify-start flex">
            <div id="curve_chart" style="width: 550px; height: 500px"></div>
            <div id="columnchart_values" style="width: 500px; height: 500px;"></div>


        </div>
</form>