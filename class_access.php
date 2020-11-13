<?php

/**
 * 
 */
class Cars
{

	//property of a class 
	private $wheel_count = 4;
	public $door_count = 4;
	protected $seat_count = 4;

	function car_detail() {
		echo 'Wheel Count : ' . $this->wheel_count . '<br>';
		echo 'Door Count : ' . $this->door_count  . '<br>';
		echo 'Seat Count : ' . $this->seat_count  . '<br>';
	}
}

$bmw = new Cars();
// echo $bmw->wheel_count; //no access
// echo $bmw->door_count;
// echo $bmw->seat_count; //no access
 echo $bmw->car_detail();

// $mercedies = new Cars();
//echo $bmw -> wheel_count = 10; // not accessable because of private access specifier
// echo "<br>";
// echo $mercedies ->car_detail(); // can acess properties

?>