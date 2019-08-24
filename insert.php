<?php 
// echo "Haii";die;
$servername = "localhost";
$username = "root";
$srpassword = "root";
$dbname = "shutterbucket";

$user_id = $_POST['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername,$username,$srpassword,$dbname);

if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
}
$sql = "INSERT INTO signup (USER_ID,NAME,EMAIL,PASSWORD,time) VALUES ($user_id,'$name','$email','$password','2016-06-19 09:53:32')";

if ($conn->query($sql)===TRUE) {
	echo "new record created successfully";
}else{
echo "Error : ".$sql."   ".$conn->error;
}
$conn->close();
?>