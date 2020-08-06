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
     
<body style="background-color:#90EE90;">
<div id="createparrent" class="panel-body"style="background-color:#90EE90;margin-top: 1%;width: 96%;min-height: 250px;margin-left: 2%;border-radius:15px 15px 15px 15px;">
	<form action="code.php" method="post">
		<div class="form-group">
			
				<div class="col-sm-3">
			<label> Name</label>
		</div>
				<div class="col-sm-3">
				<input class="form-control" type="text" name="name" placeholder="name" required="true">
				<i class="glyphicon glyphicon-edit icon form-control-feedback"></i>
			</div><br><br>
			<div class="form-group has-feedback">
				<div class="col-sm-3">
				<label> Identification number</label>
			</div>
				<div class="col-sm-3">
					<input class="form-control" type="number" name="idno" placeholder="identification number" required="true">
					<i class="glyphicon glyphicon-edit icon form-control-feedback"></i>
				</div></div><br><br>
				<div class="form-group has-feedback">
					<div class="col-sm-3">
					<label> Email</label>
				</div>
					
						<div class="col-sm-3">
						<input class="form-control" type="email" name="usermail" placeholder="example@gmail.com" required="true">
						<i class="glyphicon glyphicon-edit icon form-control-feedback"></i>
					</div></div><br><br>
					<div class="form-group has-feedback">
						<div class="col-sm-3"><br><br>
						<label> Password</label>
					</div>
						<div class="form-group has-feedback">
							<div class="col-sm-3">
				<input class="form-control" type="password" name="pass" placeholder="Password" required="true"><i class="glyphicon glyphicon-lock icon form-control-feedback"></i>
						</div></div></br></br>

						<div class="col-sm-6">
							<button type="submit" class="btn btn-success" name="submit"> submit</button> 
						</div></div></div></form></div>