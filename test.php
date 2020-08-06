
<?php
 
// Create connection
$conn =  mysqli_connect('localhost','root','');
 
// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_error($conn)."<br>");
} 

 
// this will select the Database sample_db
mysqli_select_db($conn,"houses") or die("db not found");


 //display Birth ceritificate

 $idno=$_POST['idno'];
	$select="select bookings.pname,bookings.idno,location,phone,seats,code,payment from bookings where bookings.idno='$idno'";
	$result=mysqli_query($conn,$select);
	if(mysqli_num_rows($result)>0){
		$output='';
	
		while($row=mysqli_fetch_array($result)){
				$output='

<div class="well pull-left" style="width:96%;min-width: 400px;margin-right: 1%;">
				<h4>Applicant Id Number: '.$_POST['idno'].'</h4>
				
		   		<form  method="post"  role="form" class="form-horizontal" >
		   			<h4>Applicant information</h4>
		   			
		   			<div class="panel pull-right" style="min-width: 200px;margin-left: 0%;">
		   					<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Passenger name</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['pname'].'" readonly>
						   </div> 
						</div>
		   				
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Idno </label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['idno'].'" readonly>
						   </div> 
						</div>
					
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Route </label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['location'].'" readonly>
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Phone Number</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['phone'].'" readonly>
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">M-pesa Code</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['code'].'" readonly>
						   </div> 
						</div>


		   			</div>
		   			
		    	</form>
		    	 <div class="well pull-left" style="width:96%;min-width: 200px;margin-right: 1%;">
				
				<h4>Update Approval Status</h4>
		   		<form  method="post"  role="form" class="form-horizontal" >
		   			<div class="form-group has-feedback" style="margin-left:0%;">
						 	<label for="user_pass"  class="col-sm-5 control-label">Status Of Approval</label>
						  	<div class="col-sm-7"> 
						  		<select name="action" class="Actions form-control select" data-id1="'.$idno.'"><option value="waiting approval" selected>Waiting Approval</option><option value="approved">Approved</option>
     								 <option value="declined">Declined</option>
      							</select>
      							<div class="form-group has-feedback">
      							
						  	<div class="col-sm-12"> 
						  	<label for="user_pass" control-label">confirm payment</label>
						  		<select name="action" class="Actions1 form-control select" data-id1="'.$idno.'"><option value="Unpaid" selected>Unpaid</option><option value="Paid">Paid</option>
     								 
      							</select>
      								
						   </div> 
						   </div>
						   </div>
						   </div>
						</div>
					
				</form>
		</div>

		 </div>
		';
		echo $output;
	}
			}
// 			$idno=$_POST['idno'];
// 	$select="select  mum.fname,mum.lname,mum.idtno,mum.job,mum.years from mum where mum.idno='$idno'";
// 	$result=mysqli_query($conn,$select);
// 	if(mysqli_num_rows($result)>0){
// 		$output='';
	
// 		while($row=mysqli_fetch_array($result)){
// 				$output='
// 		 <div class="well pull-left" style="width:52%;min-width: 200px;margin-left: 0%;">
				
// 				<h4>Parents information</h4>
// 		   		<form  method="post"  role="form" class="form-horizontal" >
// 		   			<div class="panel pull-left" style="min-width: 200px;margin-left: 0%;width:90%;">
// 		   				<h4>Mother details</h4>
// 		   				<div class="form-group has-feedback">
// 						 	<label for="user_id" class="col-sm-6 control-label">First name </label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_id" id="user_id" value="'.$row['fname'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_pass" class="col-sm-6 control-label">Second name </label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['lname'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_pass" class="col-sm-6 control-label">Identification number</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['idtno'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_pass" class="col-sm-6 control-label">Occupation</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['job'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_pass" class="col-sm-6 control-label">Age</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['years'].'" readonly>
// 						   </div> 
// 						</div>
// 						';
// 						echo $output;
// 			}
// 		}
// 					$idno=$_POST['idno'];
// 	$select="select  dad.Fname,dad.Sname,dad.Idnum,dad.Occup,dad.Age from dad where dad.idno='$idno'";
// 	$result=mysqli_query($conn,$select);
// 	if(mysqli_num_rows($result)>0){
// 		$output='';
	
// 		while($row=mysqli_fetch_array($result)){
// 				$output='
// 						<h4>Father details</h4>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_id" class="col-sm-6 control-label">First name</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_id" id="user_id" value="'.$row['Fname'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_id" class="col-sm-6 control-label">Second name</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_id" id="user_id" value="'.$row['Sname'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_id" class="col-sm-6 control-label">Identification number</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_id" id="user_id" value="'.$row['Idnum'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_pass" class="col-sm-6 control-label">Occupation </label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['Occup'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_pass" class="col-sm-6 control-label">Age</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['Age'].'" readonly>
// 						   </div> 
// 						</div>

// 		   			</div>
		   			
// 		    	</form>
		    
// 		 </div>

// 		 				';
// 		 				echo $output;
// 		 						}
// 		}
	
// 					$idno=$_POST['idno'];
// 	$select="select  payment.recipt,payment.dates,payment.moneys from payment where payment.idno='$idno'";
// 	$result=mysqli_query($conn,$select);
// 	if(mysqli_num_rows($result)>0){
// 		$output='';
	
// 		while($row=mysqli_fetch_array($result)){
// 				$output='
// 		 	 <div class="well pull-left" style="width:96%;min-width: 200px;margin-right: 1%;">
				
// 				<h4>Payment details</h4>
// 		   		<form  method="post"  role="form" class="form-horizontal" >
// 		   			<div class="form-group has-feedback" style="margin-left:1%;">
// 						 	<label for="user_pass"  class="col-sm-6 control-label">Amount</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['recipt'].'" readonly>
// 						   </div> 
// 						</div>
// 						<div class="form-group has-feedback">
// 						 	<label for="user_pass" class="col-sm-6 control-label">Date of Payment</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['dates'].'" readonly>
// 						   </div> 
// 						</div>
// 							<div class="form-group has-feedback">
// 						 	<label for="user_pass" class="col-sm-6 control-label"> Payment code</label>
// 						  	<div class="col-sm-6"> 
// 						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['moneys'].'" readonly>
// 						   </div> 
// 						</div>
						
						
					
// 				</form>
// 		</div>
// 			';
			
		
// 		echo $output;
		
// 	}
// }


 
// mysqli_close($conn);
?>