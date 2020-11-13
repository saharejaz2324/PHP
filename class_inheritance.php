<?php

/**
 * 
 */
class Cars
{

	//property of a class 
	var $wheels = 4;

	function car_detail() {
		return "Hello<br>";
	}
}

$bmw = new Cars();
$mercedies = new Cars();
echo $bmw -> wheel_count = 10; 
echo "<br>";
echo $mercedies ->car_detail();



/**
 * 
 */
class trucks extends Cars
{
	
}

$tacoma = new trucks();
echo 'In tacoma Class <br>' . $tacoma -> wheels . '<br>';
echo $tacoma -> car_detail();


?>