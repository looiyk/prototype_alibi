<!DOCTYPE html>
<html>
<head>
	<title>
		con_logout
	</title>
</head>
<body>
	<?php
		session_start();

		session_destroy();

		header("location:../view/logout_page.php");

	?>

</body>
</html>