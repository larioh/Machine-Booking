<?php
 require('dbconn.php');
if (isset($_POST['name'])) {
	$name=$_POST['name'];
   $sql = "SELECT *  FROM machine where name='".$name."' order by name";  
	$result=mysqli_query($conn,$sql);
	$output='';
	$output.='<option value="">Select location</option>';
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result)){
		$output.='<option value="'.$row["location"].'">'.$row["location"].'</option>';
		}
	}
	else{
		$output.='<option value="" selected>No Route Found</option>';
	}
}
// else if (isset($_POST['route'])) {
// 	$car_no=$_POST['car_no'];
// 	$troute=$_POST['troute'];
//     $sql = "SELECT *  FROM vehicle where car_no='".$car_no."' && car_route='".$troute."' order by car_no";  
// 	$result=mysqli_query($conn,$sql);
// 	$output='';
// 	if(mysqli_num_rows($result)>0){
// 		while($row=mysqli_fetch_array($result)){
// 		$output.=$row["route_fare"];
// 		}
// 	}
// 	else{
// 		$output.='No Fare Amount Found';
// 	}
// }


echo $output;

?>