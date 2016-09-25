<!DOCTYPE html>
<html>
<head>
	<title>
		profile page creation
		con_new_profile
	</title>
</head>
<body>
	<?php
		include "./con_user_session.php";
	?>

	<div class="">
		<form action="" method="post">
			Alias:
			<br>
			<input type="text" name="user_alias" placeholder="User Name" required>
			<br>

			Date of Birth:
			<br>
			<input type="text" name="user_date">
			<input type="text" name="user_month">
			<input type="text" name="user_year">
			<br>

			Email:
			<br>
			<input type="text" name="user_email" placeholder="example@domain.com" required>
			<br>

			Bio:
			<br>
			<input type="text" name="user_bio" placeholder="I have potato cravings">
			<br>


		</form>
	</div>

</body>
</html>