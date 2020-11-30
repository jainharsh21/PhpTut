<?php
	#Array - Variable that holds multiple values
	/*
		- Indexed
		- Associative
		- Multi-dimensional
	*/

	// Indexed
	$people = array('Kevin', 'Jeremy', 'Sara');
	$ids = array(23, 55, 12);
	$cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    // we can add an element to the end of the array by not specifying the index.
	$cars[] = 'BMW';

    // count is used to get the length of the array
    // echo count($cars);
    // print_r is used to echo the whole array(r stands for readable)
    //print_r($cars);
    // var dump gives a detailed info
	//var_dump($cars);

	// echo $people[3];
	//echo $ids[2];
	//echo $cars[4];

    // Associative arrays
    // key valued array
	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

	//echo $people['Brad'];
	//echo $ids[22];
	$people['Jill'] = 42;
	//echo $people['Jill'];
	//print_r($people);
	//var_dump($people);

	//Multi-Dimensional
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 20),
		array('Ford', 23, 12)
	);

	echo $cars[1][2];
?>