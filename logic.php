<?php

// Variables
$number = rand(0, 20);
$symbol = ".-+=_,!@$#*%<>[]{}";
$words = array("yellow", "moon", "smile", "risk", "elephant", "language", "pool", "love", "albert", "picnic", "park", "dress", "cake", "fruit");


function generatePasswords($words, $symbol, $number){
	$length = isset($_GET['length']) ? $_GET['length'] : 0;
	$isNumber = isset($_GET['number']);
	$isSymbol = isset($_GET['symbol']);

	// Validate input
	if($length > 8){
		echo 'please enter a value below 8';
		return;
    }elseif ($length == 0) {
    	echo 'please enter number of words to generate password';
    }

	for ($i=0; $i < $length; $i++) {
	  $generatedPassword = $words[shuffle($words)];


	  // Add number if checkbox is selected
	  if ($isNumber) {
	  	$generatedPassword .= rand(0, 20);
	    array_push($words, $isNumber);
	}

	  // Add symbol if checkbox is selected
	  if ($isSymbol) {
	  	$symbolIndex = rand(0, strlen($symbol) - 1);
	    $generatedPassword .= $symbol[$symbolIndex];
	    array_push($words, $isSymbol);
	  }

	  echo $generatedPassword;
	  echo "\r\n";
	} 	

}

?>
