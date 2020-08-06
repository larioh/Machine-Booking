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

 $pnamec=$_POST['pnamec'];
  $car_no=$_POST['car_no'];
  $caroute=$_POST['caroute'];
$output='';
	$select="select * from ticket where car_no='$car_no' && route='$caroute' && pname='$pnamec'";
	$result=mysqli_query($conn,$select);
	if(mysqli_num_rows($result)>0){
		
	
		while($row=mysqli_fetch_array($result)){
				$output='
	<h4>Passenger details</h4>
		   				<div class="form-group has-feedback">
						 	<label for="user_id" class="col-sm-4 control-label">Full name </label>
						  <div class="col-sm-8">
						  	<input class="form-control" type="text" name="pname" placeholder="name" value="'.$row['pname'].'" required="true">
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Id number </label>
						  	<div class="col-sm-8">
						  	<input class="form-control" type="number" name="inumber" placeholder="38726478" value="'.$row['idno'].'" required="true"> 
						   </div>
						   </div> 
						   	<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Derparture date </label>
						  	<div class="col-sm-8">
						  	<input class="form-control" type="text" name="tdate" value="'.$row['depdate'].'"  required="true"> 
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Phone number</label>
						  	<div class="col-sm-8">
						  	<input class="form-control" type="number" name="phone" placeholder="name" value="'.$row['phone'].'" required="true">
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_pass"class="col-sm-4 control-label">Seat</label>
						  	
						 <div class="col-sm-8">
						  	<input class="form-control" type="text" name="seats" placeholder="seat no" value="'.$row['seats'].'" required="true">
						   </div> 
						</div>
						</div>
                          <div class="form-group">
                       <label for="inputname"class="col-sm-4 control-label">Mode of Payment</label>
                         <div class="col-sm-8">
                         <select name="mpayment" class="col-sm-12">
                        <option value="'.$row['mpay'].'" >'.$row['mpay'].' </option>
                          </select><br>
                         </div>
                        </div>
<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">M-peasa Code</label>
						  	<div class="col-sm-8">
						  	<input class="form-control" type="text" name="code" placeholder="MLJ23SDFT2" value="'.$row['code'].'" required="true"> 
						   </div> 
						   </div>';
						}
			}
			else{
				$output.='Passenger Ticket is not Available';
			}
			echo $output;
	

?>