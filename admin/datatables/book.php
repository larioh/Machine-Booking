
<?php
 
// Create connection
$conn =  mysqli_connect('localhost','root','');
 
// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_error($conn)."<br>");
} 

 
// this will select the Database sample_db
mysqli_select_db($conn,"matatu") or die("db not found");


 //display Birth ceritificate

 $car_no=$_POST['car_no'];
	$select="select vehicle.car_no,car_route,route_fare,d_time,a_seats from vehicle where vehicle.car_no='$car_no'";
	$result=mysqli_query($conn,$select);
	if(mysqli_num_rows($result)>0){
		$output='';
	
		while($row=mysqli_fetch_array($result)){
				$output='

<div class="well pull-left" style="width:96%;min-width: 400px;margin-right: 1%;">
				<h4>Car Number: '.$_POST['car_no'].'</h4>
				
		   		<form  method="post"  role="form" class="form-horizontal" >
		   			<h4>Car information</h4>
		   			
		   			<div class="panel pull-right" style="min-width: 200px;margin-left: 0%;">
		   					<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Car name</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['car_no'].'" readonly>
						   </div> 
						</div>
		   				
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Route</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['car_route'].'" readonly>
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_id" class="col-sm-4 control-label">Fare</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_id" id="user_id" value="'.$row['route_fare'].'" readonly>
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Derparture Time </label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['d_time'].'" readonly>
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Seat Capacity</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['a_seats'].'" readonly>
						   </div> 
						</div>
						

		   			</div>
		   			
		    	</form>
		    
		

		 </div>
		';
		echo $output;
	}
			}