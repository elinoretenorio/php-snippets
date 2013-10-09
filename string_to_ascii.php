<?php
/**
* Convert string of characters to ASCII
*
* @param     string	$string	The string of characters you want to convert into ASCII
* @return    string	$integer_string The string of ASCII characters with a divider
* @author    Elinore Tenorio
* @email     elinore.tenorio@gmail.com
*/

function charToAscii($string, $divider='-') {
	$string_length = strlen($string);
	$integer_string = '';
	
	for($i = 0; $i <= $string_length; $i++) {
		$integer_string .= ord($string[$i]);
		$separator = ($i != $string_length) ? $divider : '';
		$integer_string .= $separator;
	}
	return $integer_string;
}

echo charToAscii("Hello, World!");
?>
