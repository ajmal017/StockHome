<?php 
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)



// Some user defined function 

/*
** 
* Function to print_r and die
** 
*/
function p($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	die;
}

/*
** 
* Function to encode / generate reset password link
** 
*/
function passwordKey($userName = null, $length_of_string = 60) 
{
	// String of all alphanumeric character 
	$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
	// Shufle the $str_result and returns substring 
	// of specified length 
	return $userName.substr(str_shuffle($str_result), 0, $length_of_string); 
}

// -------------------------------

?>