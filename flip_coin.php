<?php
// Flip a coin until you get three heads in a row
$flip = 0;
$heads = 0;
while ($heads < 3) {
	$number = rand(0,1);
	$flip++;
	if ($number) {
		$heads++;
		echo 'H ';
	} else {
		$heads = 0;
		echo 'T ';
	}
}
echo $flip;
?>
