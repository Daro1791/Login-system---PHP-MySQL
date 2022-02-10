<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

try {
	$base = new PDO('mysql:host=localhost; dbname=database', 'root','');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

	$sql='SELECT * FROM users WHERE USERS= :username AND PASSWORD= :password';

	$result = $base->prepare($sql);

	$username = htmlentities(addslashes($_POST["username"]));
	$password = htmlentities(addslashes($_POST["password"]));

	$result->bindValue(":username", $username);
	$result->bindValue(":password", $password);

	$result->execute();

	$form_Count = $result->rowCount();

	if($form_Count!=0){

		session_start();

		$_SESSION['user'] = $_POST['username'];

		header("location:user_registered.php");

	}else{
		header("location:login.php");
	}
}catch(Exception $e){

	die("Error: " . $e->getMessage());

}

?>

</body>
</html>