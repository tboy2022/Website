<?php 

session_start();

if (isset($_POST['submitLogin'])) {
	$_SESSION['id'] = 1;
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		
		<p>
			Not yet a member? <a href="signup.php">Sign up</a>
		</p>
		
	</form>
	
</body>
</html>