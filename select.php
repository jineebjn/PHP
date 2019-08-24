<?php 
$servername = "localhost";
$username = "root";
$srpassword = "root";
$dbname = "shutterbucket";

$conn = new mysqli($servername,$username,$srpassword,$dbname);

if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
}
$sql = "SELECT * FROM signup";
$result = $conn->query($sql);
// echo "$result";die;
if ($result->num_rows > 0) {  ?>
	<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
	</tr>
	<?php foreach ($result as $values) { ?>
	<tr>
		<td><?php echo $values['name']; ?></td>
		<td><?php echo $values['email']; ?></td>
	</tr>
	<?php } ?>
</table>
<?php 
}elseif ($result->num_rows == 0) {
	echo "0 results";
}
else{
echo "Error : ".$sql."   ".$conn->error;
}
$conn->close();
?>