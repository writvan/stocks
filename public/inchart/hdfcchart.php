<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://alpha-vantage.p.rapidapi.com/query?function=TIME_SERIES_DAILY&symbol=HDFCBANK.BSE&outputsize=compact&datatype=json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "X-RapidAPI-Host: alpha-vantage.p.rapidapi.com",
    "X-RapidAPI-Key: 92d4dc1bb9msh708ffffd3d3d1efp1269f7jsn2a29b70e8ea3"
  ],
]);
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result, true);
?>




<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        <?php
        foreach ($result['Time Series (Daily)'] as $key => $val) {
        ?>['<?php echo $key; ?>', <?php echo $val['3. low']; ?>, <?php echo $val['1. open']; ?>, <?php echo $val['4. close']; ?>, <?php echo $val['2. high'] ?>],

          // Treat first row as data as well.
        <?php } ?>
      ], true);

      var options = {
        legend: 'none',
        candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714',stroke:'#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58',stroke:'#0f9d58' }   // green
          }
      };

      var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div id="chart_div" style="width: 100%; height: 600px;"></div>
</body>

</html>