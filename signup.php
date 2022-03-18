<?php include('functions.php') ?>
<?php

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="home.css"/>
</head>

<body>
<div class="header">
	<h2>Signup</h2>
</div>

<form method="post" action="signup.php">
	<div class="input-group">
		<label>Username</h2>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>

	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>

	<div class="input-group">
		<label>Confrim Password</label>
		<input type="password" name="password_2">
	</div>

	<div class="input-group">
		<button type="submit" class="btn" name="signup_btn">Sign Up!</button>
	</div>

	<p>
		Already have a account? <a href="login.php">Log in</a>
	</p>
	
</form>
<form method="post" action="signup.php">
	<?php echo display_error(); ?> 
</form>

</body>
</html>


