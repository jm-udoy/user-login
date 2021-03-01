<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>
	<h1>Registration Form Action</h1>

	<?php 

		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$userName = $_POST['uname'];
		$password = $_POST['passw'];
		$recEmail = $_POST['recEmail'];

		
		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['uname']) || empty($_POST['passw']) || empty($_POST['recEmail'])) {
				echo "Please fill up the full form properly";
			} 
			else {
				//$firstName = $_POST['fname'];
				//$lastName = $_POST['lname'];
				echo "REGISTRATION COMPLETED SUCCESSFULLY!";

				$filePath = "info.txt";

				$f1 = fopen($filePath, "w");

				fwrite($f1, "Name:". $firstName . " " . $lastName . "\r\n");
				fwrite($f1,"Gender: $gender\r\n");
				fwrite($f1, "Email: $email\r\n");
				fwrite($f1, "User Name: $userName\r\n");
				fwrite($f1, "Password: $password\r\n");
				fwrite($f1, "Recovery Email: $recEmail\r\n");

				fclose($f1);



				$filePathTwo = "username.txt";

				$f2 = fopen($filePathTwo, "w");
				fwrite($f2, "$userName\r\n");

				fclose($f2);

				$filePathThree = "password.txt";
				
				$f3 = fopen($filePathThree, "w");
				fwrite($f3, "$password\r\n");

				fclose($f3);


			}
		}
	?>

</body>
</html>