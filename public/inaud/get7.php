<?php
    $txt="the latest price of amazon stock is 94.8800 dollars with a change of 2.4500 dollars and 2.6507 percent change";
	$txt=htmlspecialchars($txt);
	$txt=rawurlencode($txt);
	$html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-IN');
	$player="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
	echo $player;

?>