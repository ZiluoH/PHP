<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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
			echo 'welcome' . ' ' . $username;
		}
	} 
 ?>
</body>
</html>