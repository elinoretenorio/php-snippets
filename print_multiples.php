<?php
/**
 * Prints all multiples of a number between a range of numbers
 *
 * @param     int $start
 * @param     int $end
 * @param     int $multiple
 * @return    string All the multiples of a given number
 * @author    Elinore Tenorio
 * @email     elinore.tenorio@gmail.com
 */

function printMultiples($start, $end, $multiple=1) {
	$list = '';
	for ($i=$start; $i<=$end; $i++) {
		if ($i%$multiple == 0) {
			$list .= $i . ' ';
		} 
	}
	return $list;
}
echo printMultiples(1,100,6);
?>
