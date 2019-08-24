<?php session_start();
$servername = "localhost";
$username = "root";
$srpassword = "root";
$dbname = "shutterbucket";

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername,$username,$srpassword,$dbname);

if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
}
$sql = "SELECT id FROM signup WHERE email LIKE '$email' AND password LIKE '$password'";
$result = $conn->query($sql);
// echo "$result";die;
if ($result->num_rows == 1) {  
	$_SESSION["logged_in"] = 1;
	header("Location: http://localhost/php/sample/admin.php", true, 301);
	exit();
}elseif ($result->num_rows == 0) {
	header("Location: http://localhost/php/sample/index.php", true, 301);
	exit();
}
else{
echo "Error : ".$sql."   ".$conn->error;
}
$conn->close();
?>