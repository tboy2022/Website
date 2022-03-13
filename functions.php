<?php
session_start();

//connect to database
$db = mysqli_connect('localhost', 'root', '', 'loginsystem');

//varible declaration
$username = "";
$email	= "";
$errors	= array();

//call the register() function when sign up is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// User SignUp
function register(){
		//call these varibles with global to make them available in function
		global $db, $errors, $username, $email;
		
		// receive all input values from the form. call e() function
		//user form values
		$username	= e($_POST['username']);
		$email	= e($_POST['email']);
		$password_1	= e($_POST['password_1']);
		$password_2	= e($_POST['password_2']);

		//form validation
		if (empty($username)) {
			array_pust($errors, "Username Required");
		}
		if (empt($email)) {
			array_push($errors, "E-Mail Required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password Required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "Passwords do not match");
		}
		
		// register user if no errors
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (username, email, user_type, password) 
						VALUES('$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: home.php');
			}else{
				$query = "INSERT INTO users (username, email, user_type, password) 
						VALUES('$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);
				
				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: index.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}