<?php
	//login

	include "../../header.php";

 	$user_name 		= $_POST["user_name"];
 	$user_password 	= $_POST["user_password"];


	$sql = "SELECT * 
				FROM user_registration 
				WHERE user_name = '$user_name' 
				AND user_password = '$user_password'" ;

	//echo mysqli_query($conn,$sql);
	$query = mysqli_query($conn,$sql);

	if(!empty($row = mysqli_fetch_assoc($query))){

		$_SESSION['user_id']	= $row['user_id'];
		$_SESSION['user_name'] 	= $row['user_name'];

		echo "username match!<br>";
		header("location:../view/main_page.php");

	}else{

		echo "no such user! <br>";

	}
	//you probably want to add a query here so that it seems kinda cool to stall login page

 	

 	?>