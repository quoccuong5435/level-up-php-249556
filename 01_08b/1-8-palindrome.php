<?php 

function is_palindrome( $str ) {
	// Challenge: define this function
	$str = preg_replace( '/[[:punct:]]/', '', $str);
	$str = str_ireplace(' ', '', $str);
	$str = strtolower($str);
	return $str == strrev($str);
}

function palindrome ($str) {
	$str = preg_replace('/[[:punct:]]/', '', $str);
	$str = str_ireplace(' ', '', $str);
	$str = strtolower($str);
	return strrev($str);
}

function palindrome_c($str)
{
	$str = preg_replace('/[[:punct:]]/', '', $str);
	$str = str_ireplace(' ', '', $str);
	$str = strtolower($str);
	return $str;
}

$strings = array( 'Race Car', 'Amore, Roma', 'Hello World!', 'Madam, in Eden, I\'m Adam.', 'Joe wore more than in store' );

foreach( $strings as $string ) {
	$is = is_palindrome($string) ? ' is ' : ' is not ';
	$string_convert = palindrome($string);
	$string_convert_c = palindrome_c($string);
	echo $string_convert . '<br/>';
	echo $string_convert_c . '<br/>';
	echo $string . $is . 'a palindrome.<br/>'; 
}