

<html>
<head><title>Stocks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="table-box">
        <!-- <div class="button-head">
        <a class="btn btn-primary" href="#" role="button">Indian Stocks</a>
        <a class="btn btn-primary" href="#" role="button">US Stocks</a>
        </div> -->
        <div class="table-row table-head">
            <div class="table-cell first-cell">
                <p>Date</p>
            </div>
            <div class="table-cell">
                <p>High</p>
            </div>
			<div class="table-cell">
                <p>Low</p>
            </div>
            <div class="table-cell">
                <p>Open</p>
            </div>
            <div class="table-cell last-cell">
                <p>Close</p>
            </div> 
        </div>

		<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL =>"https://alpha-vantage.p.rapidapi.com/query?function=TIME_SERIES_DAILY&symbol=INFY.BSE&outputsize=compact&datatype=json",
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


if(isset($result['Time Series (Daily)'])){
	foreach ($result['Time Series (Daily)'] as $key=>$val) {
		// array_push($data,$key,$val['2. high'],$val['3. low'],$val['1. open'],$val['4. close']);
		// $data=array($key,$val['2. high'],$val['3. low'],$val['1. open'],$val['3. low']);
		// print_r($data);
		$v2=$val['2. high'];
		$v3=$val['3. low'];
		$v1=$val['1. open'];
		$v4=$val['4. close'];
		echo "<div class='table-row'>";
        echo  " <div class='table-cell first-cell'>";
		echo  " <p>$key</p>";
		echo  "</div>";
		echo  "<div class='table-cell'>";
		echo       "<p>$v2</p>";
		echo  "</div>";
		echo    "<div class='table-cell'>";
		echo       " <p>$v3</p>";
		echo  "</div>";
		echo    "<div class='table-cell'>";
		echo       " <p>$v1</p>";
				echo   "</div>";
				echo    "<div class='table-cell last-cell'>";
				echo  "<a href=https://youtu.be/99vHH_6F0Ko>$v4</a>";
				// echo   "<i class='bi bi-mic' href='#' role='button'></i>";
				echo  "</div>  " ;
				echo "</div>";
}

// echo '</table>';
//     echo "<table border='1'><tr><td>DATE</td><td>OPEN</td><td>HIGH</td><td>LOW</td><td>CLOSE</td></tr>";
//     foreach($result['Time Series (Daily)'] as $key=>$val){
//         echo "<tr><td>$key</td><td>".$val['1. open']."</td><td>".$val['2. high']."</td><td>".$val['3. low']."</td><td>".$val['4. close']."</td></tr>";

//     }
//     echo "</table>";

}else{
    echo "something went wrong";
}

?>
</div>   
</body>
</html>