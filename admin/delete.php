<?php
$con=mysqli_connect("localhost","root","","farm_machines");// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$idno = $_GET['idno']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM bookings WHERE idno='".$idno."'");
mysqli_close($con);
header("Location: inde.php");
?> 