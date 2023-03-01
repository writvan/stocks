
<html>
<head><title>US Stocks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="table-box">
        <div class="button-head">
        <a class="btn btn-primary" href="indian.php" role="button">Indian Stocks</a>
        <a class="btn btn-primary" href="/" role="button">US Stocks</a>
        </div>
        <div class="table-row table-head">
            <div class="table-cell first-cell">
                <p >Company name</p>
            </div>
            <div class="table-cell">
                <p>Symbol</p>
            </div>
            <div class="table-cell">
                <p>Price</p>
            </div>
            <div class="table-cell">
                <p>Change</p>
            </div>
            <div class="table-cell">
                <p>Change Percentage</p>
            </div>
            <div class="table-cell last-cell">
                <p>Candlestick Graph</p>
            </div> 
        </div>


        <div class="table-row">
            <div class="table-cell first-cell">
            <a href="usdata/amazon.php" role="button">Amazon</a>
            </div>
            <div class="table-cell">
                <p href="#">AMZN</p>
            </div>
            <div class="table-cell">
                <p>94.5800</p>
            </div>
            <div class="table-cell">
                <p>-2.6200</p>
            </div>
            <div class="table-cell">
                <p>-2.6955%</p>
            </div>
            <div class="table-cell last-cell">
                <a href="uschart\amznchart.php">View</a>
                <div id="player"></div>
    <i class="bi bi-mic"type="button" name="submit" onclick="getAudio()"></i>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'get.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>
            </div>   
        </div>


        <div class="table-row">
            <div class="table-cell first-cell">
            <a href="usdata/apple.php" role="button">Apple</a>
            </div>
            <div class="table-cell">
                <p>AAPL</p>
            </div>
            <div class="table-cell">
                <p>148.4800</p>
            </div>
            <div class="table-cell">
                <p>-4.0700</p>
            </div>
            <div class="table-cell">
                <p>-2.6680%</p>
            </div>
            <div class="table-cell last-cell">
                <a href="uschart\apchart.php">View</a>
                                <div id="player"></div>
    <i class="bi bi-mic"type="button" name="submit" onclick="getAudio()"></i>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'usaud/get2.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
            <a href="usdata/google.php" role="button">Google</a>
            </div>
            <div class="table-cell">
                <p>GOOGL</p>
            </div>
            <div class="table-cell">
                <p>91.7900</p>
            </div>
            <div class="table-cell">
                <p>-2.5600</p>
            </div>
            <div class="table-cell">
                <p>-2.7133%</p>
            </div>
            <div class="table-cell last-cell">
                <a href="uschart\gchart.php">View</a>
                                <div id="player"></div>
    <i class="bi bi-mic"type="button" name="submit" onclick="getAudio()"></i>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'usaud/get3.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
            <a href="usdata/microsoft.php" role="button">Microsoft</a>
            </div>
            <div class="table-cell">
                <p>MSFT</p>
            </div>
            <div class="table-cell">
                <p>252.6700</p>
            </div>
            <div class="table-cell">
                <p>-5.3900</p>
            </div>
            <div class="table-cell">
                <p>-2.0887%</p>
            </div>
            <div class="table-cell last-cell">
                <a href="uschart\msftchart.php">View</a>
                                <div id="player"></div>
    <i class="bi bi-mic"type="button" name="submit" onclick="getAudio()"></i>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'usaud/get4.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
            <a href="usdata/tesla.php" role="button">Tesla</a>
            </div>
            <div class="table-cell">
                <p>TSLA</p>
            </div>
            <div class="table-cell">
                <p>197.3700</p>
            </div>
            <div class="table-cell">
                <p>-10.9400</p>
            </div>
            <div class="table-cell">
                <p>-5.2518%</p>
            </div>
            <div class="table-cell last-cell">
                <a href="uschart\tslachart.php">View</a>
                                <div id="player"></div>
    <i class="bi bi-mic"type="button" name="submit" onclick="getAudio()"></i>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'usaud/get5.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>
            </div>
        </div>


        <div class="table-row">
            <div class="table-cell first-cell">
            <a href="usdata/nvidia.php" role="button">Nvidia</a>
            </div>
            <div class="table-cell">
                <p>NVDA</p>
            </div>
            <div class="table-cell">
                <p>206.5500</p>
            </div>
            <div class="table-cell">
                <p>-7.3300</p>
            </div>
            <div class="table-cell">
                <p>-3.4272%</p>
            </div>
            <div class="table-cell last-cell">
                <a href="uschart\nvdachart.php">View</a>
                                <div id="player"></div>
    <i class="bi bi-mic"type="button" name="submit" onclick="getAudio()"></i>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'usaud/get6.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
            <a href="usdata/meta.php" role="button">Meta</a>
            </div>
            <div class="table-cell">
                <p>META</p>
            </div>
            <div class="table-cell">
                <p>172.0800</p>
            </div>
            <div class="table-cell">
                <p>-0.8000</p>
            </div>
            <div class="table-cell">
                <p>-0.4627%</p>
            </div>
            <div class="table-cell last-cell">
                <a href="uschart\metachart.php">View</a>
                                <div id="player"></div>
    <i class="bi bi-mic"type="button" name="submit" onclick="getAudio()"></i>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'usaud/get7.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
            <a href="usdata/unh.php" role="button">UnitedHealth Group</a>
            </div>
            <div class="table-cell">
                <p>UNH</p>
            </div>
            <div class="table-cell">
                <p>491.3100</p>
            </div>
            <div class="table-cell">
                <p>-7.7700</p>
            </div>
            <div class="table-cell">
                <p>-1.5569%</p>
            </div>
            <div class="table-cell last-cell">
                <a href="uschart\unhchart.php">View</a>
                                <div id="player"></div>
    <i class="bi bi-mic"type="button" name="submit" onclick="getAudio()"></i>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'usaud/get1.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>
            </div>
        </div>
</div>   
</body>
</html>
