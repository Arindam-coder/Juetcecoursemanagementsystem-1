<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logged Out</title>
</head>
<body>
	<?php
		require "header.php";
		require "prevent_logout.php";
		echo "<h4>You are successfully logged out</h4><br>";
		echo"<a href='login.php'>Click here</a> to login again.";
		require "footer.php";
	?>
</body>
</html>