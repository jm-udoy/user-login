<!DOCTYPE html>
<html>
<head>
	<title>Login Page Action</title>
</head>
<body>
	<h1>Login Page Action</h1>

	<?php 

		$username = $_POST['username'];
		$password = $_POST['password'];

		
		if($_SERVER['REQUEST_METHOD'] == "POST") {

			$filePathTwo = "username.txt";

			$f4 = fopen($filePathTwo, "r");

			$usernamedata = fread($f4, filesize($filePathTwo));



			$filePathThree = "password.txt";

			$f5 = fopen($filePathThree, "r");

			$passworddata = fread($f5, filesize($filePathThree));

			$comp = strcmp($username,$usernamedata);


			$comptwo = strcmp($password,$passworddata);


			if($comp == -2 and $comptwo == -2) {
				echo "LOGIN SUCCESSFUL!";
			} 
			else {
				//$firstName = $_POST['fname'];
				//$lastName = $_POST['lname'];
				echo "LOGIN DENIED!";


			}
		}
	?>

</body>
</html>