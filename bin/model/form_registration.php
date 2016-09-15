<!DOCTYPE html>
<html>
	<head>
		<title>
			form_registration
		</title>
	</head>
	<body>
		<form action="../controller/con_user_registration.php" method="post">
			Username:
			<br>
			<input type="text" name="user_name" placeholder="username" required>
			<br>

			Password:
			<br>
			<input type="password" name="user_password" placeholder="password" required>
			<br>

			Email:
			<br>
			<input type="text" name="user_email" placeholder="placeholder">
			<br>

			Secret Question:
			<br>
			<input type="text" name="user_secret_question" placeholder="Mother's maiden name?">
			<br>

			Secret Answer:
			<br>
			<input type="text" name="user_secret_answer" placeholder="derp">
			<br>

			Gender: <br>
			<input type="radio" name="user_gender" value="Male"> Male <br>
			<input type="radio" name="user_gender" value="Female"> Female <br>
			<input type="radio" name="user_gender" value="Unspeakable"> Unspeakable <br>

			<input type="submit" name="submit" value="Sign Up">


		</form>
		<p><a href="http://prototype.alibi.com/index.html"> <input type="submit" name="back" value="back">
		</a></p>

	</body>
</html>