<?php 
	if (isset($_POST['submit'])) {
		echo 'yes! it work!';
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo $username . ' ' . $password;
	}
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>

<form action="form.php" method="post">
	<input type="text" placeholder="Enter your name" name="username"><br>
	<input type="password" placeholder="Enter your password" name="password"><br>
	<input type="submit" name="submit">


</form>




</body>
</html>