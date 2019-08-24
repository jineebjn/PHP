<?php 
// echo "Haii";die;
$servername = "localhost";
$username = "root";
$srpassword = "root";
$dbname = "shutterbucket";

$name = $_POST['name'];


$conn = new mysqli($servername,$username,$srpassword,$dbname);

if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
}
$sql = "DELETE FROM signup WHERE name='$name'";

if ($conn->query($sql)===TRUE) {
	echo "new record deleted successfully";
}else{
echo "Error : ".$sql."   ".$conn->error;
}
$conn->close();
?>