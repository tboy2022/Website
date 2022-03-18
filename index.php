<?php include('functions.php') ?>
<?php 
	include_once 'dbh.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP File Upload</title>
</head>
<body>

<?php
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$sqlImg = "SELECT * FROM profileimg WHERE user= ''";
			$resultImg = mysqli_query($conn, $sqlImg);
			while($rowImg = mysqli_fetch_assoc($resultImg)) {
				echo "<div>";
			if ($rowImg['status'] == 0) {
				echo "<img src='uploads/profile".$id.".jpg'>";
			} else {
				echo "<img src='uploads/default.jpg'>";
			}
				echo $row['username'];
			echo "</div>";
			}
		}
	} 
	if (isset($_SESSION['id'])) {
		if ($_SESSION['id'] == 1 ) {
			echo "upload an image";
		}
		echo "<form action='fileuploadscript.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='file' id='fileToUpload'>
        <button type='submit' name='submit'>Start Upload</button>
		</form>";
	}
?>



<p>Login as user!</p>
<form action="login.php" method="POST">
	<button type="submit" name="submitLogin">Login</button>
</form>

<p>Logout as user!</p>
<form action="logout.php" method="POST">
	<button type="submit" name="submitLogout">Sign Out</button>
</form>

</body>
</html>
