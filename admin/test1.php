<?php
require('dbconn.php');
if (isset($_POST['action'])) {
	$action=$_POST['action'];
$idno=$_POST['idno'];
$update="update bookings set status='".$action."' where idno='".$idno."'";
	$output='';

	if(mysqli_query($conn,$update)){
		$output.="status approved succesfully";
		}
	
	else{
		$output.=' Status Not Updated';
	}
echo $output;

}
else if (isset($_POST['action1'])) {
	$action1=$_POST['action1'];
$idno=$_POST['idno'];
$update="update bookings set payment='".$action1."' where idno='".$idno."'";
	$output='';

	if(mysqli_query($conn,$update)){
		$output.="payment approved succesfully";
		}
	
	else{
		$output.=' payment Not Updated';
	}
echo $output;

}
?>
