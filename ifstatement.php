<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>If Statement</title>
</head>
<body>
	
<?php 


if (3 < 10) {
	echo '3 is less than 10';
} elseif ( 4 < 5) {
	echo '4 is less than 5';
} else {
	echo '3 is not less than 10';
}

echo '<br>';

if ( 4 === '4' || 5 < 10) {
	echo '4 is 4' .'<br>';
}

echo '<h2>Switch Statement</h2>';

$number = 'pppp';
switch ($number) {
	case '10':
		echo 'it is 10';
		break;
	case 'pp':
		echo 'it is ppp';
		break;
	case 'pppp':
		echo 'it is pppp';
		break;

	
	default:
		echo 'we could not find anything';
		break;
}
echo '<br>';
echo "<h2>While Statement</h2><br>";

$counter = 0;
while ($counter <= 10) {
	echo $counter . ' ';
	$counter++;
}

echo '<br>';

for ($i=0; $i < 10; $i++) { 
	echo $i+1 . ' ';
}

echo '<br>';
echo '<h2>Foreach Array</h2>';
echo '<br>';

$numbers = [345, 546, 1324, 123, 3421, 7576, 234];

foreach ($numbers as $number) {
	echo $number . ' ';
}

 ?>






</body>
</html>