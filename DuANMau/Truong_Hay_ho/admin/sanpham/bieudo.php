
  <div class="row2">
    <div class="row2 font_title">
      <h1>Biểu đồ san pham</h1>
    </div>
    <div class="row2 form_content ">
      <div
              id="myChart" style=" width:100%; width:800px; height:500px; align-items: center">
      </div>

      <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

// Set Data
          const data = google.visualization.arrayToDataTable([
            ['san pham', 'so luong binh luan'],
            <?php
              foreach ($listsanpham as $sanpham){
                  extract($sanpham);
                      echo "['$name',$sobinhluan],";
              }
            ?>
          ]);

// Set Options
          const options = {
            title:'Bieu Do binh luan',
            is3D:true
          };

// Draw

          const chart = new google.visualization.PieChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
      </script>

    </div>
  </div>