<?php

/**
 * 
 */
class CarsParts
{
	
	function gretting()
	{
		echo "WELCOME";
	}
}


$check_method = get_class_methods('CarsParts');

foreach ($check_method as $value) {
	echo $value . '</br>';
}

?>