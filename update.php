<?php 
// echo "Haii";die;
$servername = "localhost";
$username = "root";
$srpassword = "root";
$dbname = "shutterbucket";

$uid = $_POST['user-id'];
$name = $_POST['name'];


$conn = new mysqli($servername,$username,$srpassword,$dbname);

if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
}
$sql = "UPDATE signup SET name='$name' WHERE id=$uid";

if ($conn->query($sql)===TRUE) {
	echo "new record updated successfully";
}else{
echo "Error : ".$sql."   ".$conn->error;
}
$conn->close();
?>