<?php include "db.php" ?>
<?php 
	
	function showAllData(){
		global $connection;
		$query = "SELECT * FROM users";
		$result = mysqli_query($connection, $query);
		if (!$result) {
			die('Query fail' . mysqli_error());
		}

		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];

			echo "<option value='$id'>$id</option>";			
		}
	}


	function updateTable(){
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		
		// for security;
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		// encript password
		$hashFormat = "$2y$10$";
		$salt = "alsicnfguenshcjtsd18";
		$hashF_and_salt = $hashFormat . $salt;
		$password = crypt($password, $hashF_and_salt);



		$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

		$result = mysqli_query($connection, $query);
		if (!$result) {
			die("Query Fail " . mysqli_error($connection));
		}
	}


	function deleteRows(){
		global $connection;
		$id = $_POST['id'];

		$query = "DELETE FROM users WHERE id = $id";

		$result = mysqli_query($connection, $query);
		if (!$result) {
			die("Query Failed " . mysqli_error($connection));
		}

	}
 ?>