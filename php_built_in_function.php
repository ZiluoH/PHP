<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP built in fuctions</title>
</head>
<body>
	<?php 

	echo pow(2, 7) . '<br>';

	echo rand(1, 10); //ran from 1-10

	echo '<br>';

	echo sqrt(4); //square root

	echo '<br>';

	echo 'ceil(4.1)' . ' ' . ceil(4.1);

	echo '<br>';

	echo floor(4.1);

	echo '<br>';

	echo round(4.5) . ' ' . round(4.4);

	echo '<br>';

	echo '<h2>string function</h2>';

	$string = 'Hello do you like it?';

	echo strlen($string); //string length include space

	echo '<br>';

	echo strtoupper($string);

	echo '<br>';

	echo '<h2>array function</h2>';

	$list = [23, 345,346,2134,5436,123,534,2134,1,3333,123];

	echo '<br>';

	echo max($list);

	echo '<br>';

	echo min($list);

	echo '<br>';

	sort($list);

	print_r($list);





	 ?>
</body>
</html>