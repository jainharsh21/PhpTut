<?php
	// Single line comment
	# Single line comment
	/*
		Multiline
		comment
	*/

	#VARIABLES
	/*
		- Prefix $
		- Start with a letter or an underscore
		- Only letters, numbers and underscores
		- Case sensitive
	*/

	#DATA TYPES
	/*
		String
		Integers
		floats
		Booleans
		Arrays
		Objects
		NULL
		Resource
	*/

	$output = 'Hello World!';

	$num1 = 4;
	$num2 = 10;
	$sum = $num1 + $num2;

	$string1 = 'Hello';
    $string2 = 'World';
    // concat is done using '.' and not '+'
    $greeting = $string1 .' '. $string2.'!';
    // we can parse variables into double quotes
	$greeting2 = "$string1 $string2";

    // escape characters can be used when we need to use the same quote in the string. Although it is better to use different quotes for automatic escape.
	$string3 = "They\"re Here";

	$float1 = 4.4;
    $bool1 = true;
    
    // to create a constants we use the 'define' function
    // 'true' would make the constant case insensitive
	define('GREETING', 'Hello Everyone', true);

	echo greeting;
?>