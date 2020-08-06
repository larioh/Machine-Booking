<?php
 require('dbconn.php');
if (isset($_POST['car_no'])) {
	$car_no=$_POST['car_no'];
   $sql = "SELECT *  FROM bookings where car_no='".$car_no."' order by car_no";  
	$result=mysqli_query($conn,$sql);
	$output='';
	$output.='<option value="">Select Passenger Name</option>';
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result)){
		$output.='<option value="'.$row["pname"].'">'.$row["pname"].'</option>';
		}
	}
	else{
		$output.='<option value="" selected>No Passenger Found</option>';
	}
}


echo $output;

?>