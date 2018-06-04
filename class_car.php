<?php 
 class Car {

 	// add properties
 	// var $wheels = 4;
 	// var $hood = 1;
 	// var $engine = 1;
    public $wheels = 4;
 	protected $hood = 1;
  	private $engine = 1;
 	var $doors = 4;
 	static $window = 6;

 	function MoveWheels(){

 		// echo "Wheels move";
 		$this -> wheels = 10;
 	}

 	function MoreDoors(){
 		$this -> doors = 6;
 	}

 	// function __construct(){
 	// 	echo $this -> hood = 2;
 	// }
 }



// use class
 $bmw = new Car();
 // $truck = new Car();
// $bmw -> MoveWheels();
 // $truck -> MoreDoors();
 echo $bmw -> wheels . "<br>";
 echo Car::$window;
 // echo $truck -> doors;
 // $benz = new Car();

 // $bmw -> MoveWheels();

 // $benz -> MoveWheels();

// echo "<br>";

// class Plane extends Car{
// 	var $wheels = 20;

// }

// $jet = new Plane();
// echo $jet -> wheels;


// if (class_exists("Car")) {
// 	echo "Yes";
// } else {
// 	echo "no";
// }

// if (method_exists("Car", "MoveWheels")) {
// 	echo "Yes, MoveWheels";
// } else {
// 	echo "no";
// }



 ?>










<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>