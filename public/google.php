<!DOCTYPE html>
<html>
<head>
	Google
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Google</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
	<script src='main.js'></script>
</head>
<body>
	
</body>
</html>

<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://alpha-vantage.p.rapidapi.com/query?function=TIME_SERIES_DAILY&symbol=GOOGL&outputsize=compact&datatype=json",
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
    echo "<table border='1'><tr><td>DATE</td><td>OPEN</td><td>HIGH</td><td>LOW</td><td>CLOSE</td></tr>";
    foreach($result['Time Series (Daily)'] as $key=>$val){
        echo "<tr><td>$key</td><td>".$val['1. open']."</td><td>".$val['2. high']."</td><td>".$val['3. low']."</td><td>".$val['4. close']."</td></tr>";

    }
    echo "</table>";

}else{
    echo "something went wrong";
}

?>