<?php
require_once "assets/php/config.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>WPA3 | Account</title>
	<link rel="icon" href="assets/images/msuicon.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
	<div class="card">
		<h1 style="text-align: center;">
			Web Programming A3
		</h1>
	</div>

	<div class="topnav">
		<a href="main.html">Home</a>
		<a href="account.php" class="active">Account</a>
		<a href="entries.php">Entries</a>
		<a href="assets/php/logout.php" style="float:right" role="button">Logout</a>
	</div>

	<div class="container">
		<div class="card">
			<h2 style="text-align: center;">Update Account</h2>
		</div>

		<div class="card">
			<form action="assets/php/update.php" method='post'>

				<label for="id" class="customheader">Account ID</label><br>
				<input type="text" placeholder="Account ID" name="id" value="<?=$_SESSION['ID']?>" disabled><br><br>

				<label for="email" class="customheader">Email Address</label><br>
				<input type="text" placeholder="Email" name="email" value="<?=$_SESSION['Email']?>"><br><br>

				<label for="uname" class="customheader">Username</label><br>
				<input type="text" placeholder="Username." name="uname" value="<?=$_SESSION['Username']?>"><br><br>

				<label for="pswd" class="customheader">Password</label><br>
				<input type="password" placeholder="Password" name="pswd" value="<?=$_SESSION['Password']?>"><br><br>

				<button type="submit" class="bigredBtn" style="background-color:#04AA6D;">Update</button>
			</form>
		</div>
	</div>
</body>

</html>