<?php 
	if (isset($_POST['submit'])) {
		
		$name = ['aaa', 'bbb', 'ccc'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		

		if (strlen($username) < 2) {
			echo 'username has to be longer than 5.';
		}

		if (!in_array($username, $name)) {
			echo 'You are not allow to log in';
		} else {
			echo 'welcome';
		}
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