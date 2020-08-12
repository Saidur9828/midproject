<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>
<center>
	Login Page
</center>
		 <?php if(isset($_SESSION['pass'])){ echo $_SESSION['pass'];} ?>
	</h1>

	<hr>
	<form method="POST" action="logCheck.php">
		<center>
    <strong>Username:</strong> <input type="text" name="uname" value="">
		<h2></h2>
    <strong>Password:</strong> <input type="password" name="password" value=""><br>
	<h3></h3>	<input type="submit" name="submit" value="Submit">
		</center>
	</form>
	<hr>
</body>
</html>
