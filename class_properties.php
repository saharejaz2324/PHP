<?php

/**
 * 
 */
class Cars
{

	//property of a class 
	var $wheel_count = 4;
	var $door_count = 4;

	function car_detail() {
		return "This car has " . $this->wheel_count . " Wheels";
	}
}

$bmw = new Cars();
$mercedies = new Cars();
echo $bmw -> wheel_count = 10; 
echo "<br>";
echo $mercedies ->car_detail();

?>