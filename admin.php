<?php session_start();
if (isset($_SESSION["logged_in"])) {
	$_SESSION["logged_in"] += 1 ;
}else{
	header("Location: http://localhost/php/sample/index.php", true, 301);
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>php with database</title>
</head>
<body>
<form method="post" action="insert.php">
	<input type="number" name="user_id">
	<input type="text" name="name">
	<input type="email" name="email">
	<input type="password" name="password">
	<input type="submit">
</form>
<br><hr><br>
<a role="button" href="select.php">Show table values</a><br><br>

<form method="post" action="delete.php">
	<label>Enter username to delete</label>
	<input type="text" name="name">
	<input type="submit">
</form>

<form method="post" action="update.php">
	<label>Enter id to update</label>
	<input type="number" name="user-id">
	<label>Enter new name</label>
	<input type="text" name="name">
	<input type="submit">
</form>
<a href="logout.php">Logout</a>
</body>
</html>