<?php include('nav.php');?>
<!DOCTYPE html>
<html>
  <head><title>login</title>
   

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >

<script src="bootstrap/scripts/jquery.js"></script>
<script src="bootstrap/scripts/bootstrap.min.js"></script>


    <!-- Custom Fonts -->
    
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>
     
<body>
<div class="container" style="padding-top: 2%;padding-bottom: 10%;width: 40%; height:90%;border-radius: 15px 15px 15px 15px;background-color:#90EE90;margin-top:50px;">
	<div class="login-panel panel panel-default">
                    <div class="panel-heading" style="background-color:#90EE90;height:60px;">
     <h3 class="panel-title"style="color:white;background-color:#90EE90;">Registration Form</h3><br><br>
                    </div>
                    <div class="panel-body"style="background-color:" >
	<form action="code.php" method="post">
		<div class="form-group" style="background-color:;">
			
				
					<label> Name</label>
					<div class="form-group has-feedback">
				<input class="form-control" type="text" name="name" placeholder="name" required="true">
			</div>
			
			
			
				
					<label> Identification number</label>
					<div class="form-group has-feedback">
					<input class="form-control" type="number" name="idno" placeholder="identification number" required="true"></div>
			
				
							<label> Email</label>
							<div class="form-group has-feedback">
						<input class="form-control" type="email" name="usermail" placeholder="example@gmail.com" required="true"></div>
					
					
						<label> Password</label>
					
						<div class="form-group has-feedback">
				<input class="form-control" type="password" name="pass" placeholder="Password" required="true"></div>
				
			

						
							<button type="submit" class="btn btn-success btn btn-block" name="submit"> submit</button> 
						
					</div></div></form></div></div></div>
					</body>