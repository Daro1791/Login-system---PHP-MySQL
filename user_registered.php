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

	<h1>Welcome</h1>

	<?php

	echo "Hello " . $_SESSION['user'] . "<br>";

	?>
	<p>This information is only for registered users</p>

	<table>
		<tr>
			<td><a href='user_registered_page1.php'>Page 1 </a></td>
			<td><a href='user_registered_page2.php'>Page 2 </a></td>
		</tr>
	</table>

</body>
</html>