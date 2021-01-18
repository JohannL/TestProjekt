<?php

// einzeiliger kommentar

//remove the first slash in the next line to see a neat trick ^_^
//*
	$whatever = true;
/*/
	$whatever = false;
/*/


$string = 'blah';
$double = '0.0008913408910923123123123';
$also_a_double_because_floats_dont_exist_in_php = '0.0';
$bool = true;
$null = NULL;

$indexed_array = [0, 23823, 'poop', false];
$associative_array = [
	'a' => 'blah',
	'b' => 'bleh',
];

foreach ($indexed_array as $key => $value)
{
	//*
		echo $value;
	/*/
		echo $indexed_array[$key];
	/*/
}

foreach ($associative_array as $key => $value)
{
	//*
		echo $value;
	/*/
		echo $indexed_array[$key];
	/*/
}