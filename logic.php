<?php

$number = rand(0, 20);
$symbol = ".-+=_,!@$#*%<>[]{}";
$words = array("yellow", "moon", "smile", "risk", "elephant", "language", "pool", "love", "albert", "picnic");
$chars = "";


//$length = count($words);
 
for ($x=0; $x<=5; $x++) {
  echo $words[$x];
} 


function generatePasswords($words, $symbol, $number){
	$length = $_GET['length'];

	$isNumber = isset($_GET['number']);
	$isSymbol = isset($_GET['symbol']);
	
	//Validate input
	if($length > 8){
		echo 'Please enter a value below 8';
		return;
    }

	for ($x=0; $x<=$length-1; $x++) {
	  $generatedPassword = $words[$x];

	  //Append number if selected
	  if ($isNumber)
	  	$generatedPassword .= rand(0, 20);

	  //Append symbol if selected
	  if ($isSymbol){
	  	$symbolIndex = rand(0, strlen($symbol) - 1);
	    $generatedPassword .= $symbol[$symbolIndex];
	  }

	  echo $generatedPassword;
	  echo "\r\n";
	} 	

}

?>
