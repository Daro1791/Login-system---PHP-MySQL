<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

	session_start();

	if(!isset($_SESSION['user'])){

		header("location:login.php");
	};

	?>

	<p><a href="logout.php">Logout</a></p>;

	<h1>Page 1</h1>

	<?php

	echo "User: " . $_SESSION['user'] . "<br>";

	?>

	<p>This is the page 1</p>
	
	<table>
		<tr>
			<td colspan="2">
				<a href="user_registered.php">Back </a>
			</td>
		</tr>
	</table>

</body>
</html>