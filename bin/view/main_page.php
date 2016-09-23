<!DOCTYPE html>
<html>
<style type="text/css">
	body {
		font-size: 100%;
		margin: 15px;
		background: #666;
		color: #fff;
	}
</style>
	<head>
		<title>
			main_page
		</title>
	</head>
	<body>
	<?php include "../controller/con_user_session.php";
	?>
		<div>
			<p>
				<a href="http://prototype.alibi.com/bin/view/user_profile.php">
					<input type="submit" name="user_profile" value="Profile">
				</a>
			</p>
		</div>

		<div>
			<p>
				<a href="http://prototype.alibi.com/bin/user_settings.php">
					<input type="submit" name="user_setting" value="Settings">
				</a>
			</p>
			<p>
				<a href="http://prototype.alibi.com/bin/controller/con_logout.php">
					<input type="submit" name="con_logout" value="Log Out">
				</a>
			</p>
		</div>
		<p>Sup! main page</p>
		<div>
			<p>
				<a href="http://prototype.alibi.com/try/PostItNotes/postItNotes.php">
					<input type="submit" name="user_profile" value="Post It Notes">
				</a>
			</p>
		</div>

	</body>
</html>