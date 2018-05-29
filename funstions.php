<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions</title>
</head>
<body>
<?php 

function say_something(){
	echo 'Hello World!' . '<br>';

	calculate();

};


say_something();


function calculate(){
	echo 456 + 123;
}

function br(){
	echo '<br>';
}

br();

function greeting($message){
	echo $message;
}

greeting('Hello message!');

br();


function cal2($num1, $num2){
	$sum = $num1 + $num2;
	echo $sum;
	br();
}

cal2(48, 2);
br();

function addNum($num1, $num2){
	$sum = $num1 + $num2;

	return $sum;
}


$result = addNum(10, 20);

$result = addNum(10, $result);

echo $result;




echo '<h2>scope</h2>';
br();

$x = 'outside'; //global

function convert(){
	global $x; //make local become global
	$x = 'inside'; //local
	
}

echo $x;
br();

convert();
echo $x;


br();
echo '<h2>constant</h2>';
br();

define('Boo', 1000);

$Boo = 2000; //you cant change a constant

echo Boo;

















?>
</body>
</html>