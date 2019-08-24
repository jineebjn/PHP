<?php session_start();
if (isset($_SESSION["logged_in"])) {
	header("Location: http://localhost/php/sample/admin.php", true, 301);
	exit();
}else{
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form method="post" action="login.php">
		<input type="email" name="email">
		<input type="password" name="password">
		<input type="submit" value="login">
	</form>
</body>
</html>
<?php } ?>