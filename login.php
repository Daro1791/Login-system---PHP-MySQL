<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style>

		h1{
			text-align: center;
			color: #000;
		}

		table {
			width: 25%;
			background-color: #ffc;
			border: 2px solid #f00;
			margin:  auto;
		}

			.left {text-align: center;};
			.right {text-align: center;};

			td {
				text-align: center;
				padding: 10px;
			}

			tr {
				text-align: center;
			}
	</style>	
		
</head>
<body>

	<h1>Login</h1>

	<form action="authenticate.php" method="post">

	<table>
		<tr>
			<td class="left">Username:</td>
			<td class="right">
				<input type="text" name="username" id="username" required>
			</td> 
		</tr>
		<tr>
			<td class="left">Password:</td>
			<td class="right">
				<input type="password" name="password" id="password" required>
			</td> 
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="login" value="Login">
			</td>
		</tr>
	</table>

</body>
</html>