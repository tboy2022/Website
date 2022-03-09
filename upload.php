<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data"> 
	Select image to upload:
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
</form>
	
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
	// check if file already exists
	if (file_exists($target_file)) {
		echo "sorry, file already exists.";
		$uploadOk =0;
	}
	// check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "sorry the file is too big.";
		$uploadOk =0;
	}
	// Allow certain files
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk =0;
	}
}
?>
</body>
</html>
