<?php include('functions.php') ?>
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
		<button type="submit" class="btn" name="signup_button">Sign Up!</button>
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

<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result		= mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

<?php
    }
?>
