<?php
 require('dbconn.php');
$name=$_POST['name'];
	$location=$_POST['location'];
    $sql = "SELECT *  FROM machine where name='".$name."' && location='".$location."' order by name";  
	$result=mysqli_query($conn,$sql);
	$output='';
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result)){
		$output.=$row["amount"];
		}
	}
	else{
		$output.='0.00';
	}

echo $output;

?>