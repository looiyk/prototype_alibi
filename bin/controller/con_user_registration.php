<!DOCTYPE html>
<html>
	<head>
		<title>
			user_registration controller
		</title>
	</head>
	<body>
	Welcome <?php echo $_POST["user_name"]; ?><br>

 	Your record status is:


 	<?php
 	$servername 	= "localhost";
	$username		= "root";
	$password		= "";
	$database		= 'alibi_db';

	$conn = new mysqli($servername, $username, $password, $database);

	if($conn -> connect_error){
		die("Connection failed: " . mysqli_connect_error());
	}


 	$user_name 					= $_POST["user_name"];
 	$user_password 				= $_POST["user_password"];
 	$user_email 				= $_POST["user_email"];
 	$user_secret_question		= $_POST["user_secret_question"];
 	$user_secret_answer			= $_POST["user_secret_answer"];
 	$user_gender				= $_POST["user_gender"];


	$sql = "INSERT INTO `user_registration` (`user_name`, `user_password`, `user_email`, `user_secret_question`, `user_secret_answer`, `user_gender`) 
			VALUES ('$user_name', '$user_password', '$user_email', '$user_secret_question', '$user_secret_answer', '$user_gender')";

	if (mysqli_query($conn,$sql)){
		echo "successful <br>";

		echo "Name				: " . $user_name . "<br>";
		echo "Email				: " . $user_email . "<br>";
		echo "Secret Question  	: " . $user_secret_question . "<br>";
		echo "Secret Answer 	: " . $user_secret_answer. "<br>";
		echo "gender 			: " . $user_gender . "<br>";

		echo "Write down your secret answer and keep it safely hidden for password recovery procedure!";

	} else {
		echo "Error: ". $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

	?>

	<p>
		<a href="http://prototype.alibi.com/index.html"> <input type="submit" name="back" value="Back to Login">
		</a>
	</p>

	</body>
</html>