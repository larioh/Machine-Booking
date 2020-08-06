
<?php
$con=mysqli_connect("localhost","root","","houses");// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name = $_GET['name']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM vehicle WHERE name='".$name."'");
mysqli_close($con);
header("Location: index.php");

?> 