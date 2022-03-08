
<html>
<head>

<link rel="stylesheet" type="text/css" href="index.css"> <!--for external styling-->
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<body>
	<h1>Login Page</h1>
	<div class="login">
	<form id="login" meethod="get" action="login.php">
		<label><b>User Name</b>
		</label>
		<input type="text" name="Uname" id="Uname" placeholder="Username">
		<br><br>
		<label><b>Password</b>
		</label>
		<input type="Password" name="Pass" id="Pass" placeholder="Password">
		<br><br>
		<input type="button" name="log" id="log" value="LogIn">
		<br><br>
		<input type="checkbox" id="check">
		<span>Remember me </span>
		<br><br>
		Forgot <a href="#"> Password</a>
	</form> 
	<?php 
$name = $email = $gender = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
	$gender = test_input($_POST["gender"]);
}

function test_input($data) [
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
	?>
	
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

	
	
</body>
</html>
