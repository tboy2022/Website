<?php
$cookie_name = "user";
$cookie_value = "Dio";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
// 86400 = 1 day
?>

<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
	echo "cookie named '" . $cookie_name . "' is not set!";
}	else {
	echo "cookie '" . $cookie_name . "' is set!<br>";
	echo "value is: " . $_COOKIE[$cookie_name];
}

?>

</body>
</html>