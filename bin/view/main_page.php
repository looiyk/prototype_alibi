<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/main_page.css">
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
			<div class="controls">
				<img class="New" src="../src/note.png"/>
			</div>
			<div class="postItNotes">
				<ul class="notes"/>
				<?php include("../model/post_it_note.php"); ?>
				</ul>
			</div>
		</div>

	</body>
</html>