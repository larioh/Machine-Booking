<?php include('linker.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Birth Certificate Registration</title>
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >


    <!-- Custom Fonts -->
    
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="bootsrap/scripts/bootstrap.js"></script>
<script src="bootstrap/scripts/jquery.js"></script>
<script src="bootstrap/scripts/bootstrap.min.js"></script>
<script type="text/javascript">
      $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
</script>
	</head>
	 <div class="container">
        <div class="row">
            
           
        <div class="panel-body"style="background-color:#aceace;margin-top: 0%;padding-bottom: 5px;border-radius: 15px 15px 15px 15px;height: 100%;width: 100%;">
             <div class="panel-heading">
                <h2 class="panel-title" style="text-align: center;font-size: 30px;"><b> Provide Passenger details below <b></h2><br><br>
                    </div>
            <form action="ticket.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
                <div class="container" style="padding-top: 2%;padding-bottom: 2%; width: 49%;min-width: 250px;border-radius: 15px 15px 15px 15px;" >
<!-- <form action="index.php" method="post"> -->


  <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Full names</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="tname" placeholder="names" required="true">
      </div>
  </div>
    </div>
   
    <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Id number</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="tid" placeholder="30324567" required="true">
      </div>
  </div>
  <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Email</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" name="temail" placeholder="email@gmail.com" required="true">
      </div>
  </div>

 <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Route</label>
<div class="col-sm-6">
<select name="troute" class="col-sm-12">
<option value="Meru">Nairobi-Meru </option>
<option value="Nakuru">Nairobi-Nakuru </option>
<option value="Eldoret">Nairobi-Eldoret </option>
</select><br>
  </div>
 </div>
   <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Phone Number</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="tdepdate" placeholder="0719456789" required="true">
      </div>
  </div>

 <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Seats booked</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="tseats" placeholder="seat number(3)" required="true">
      </div>
  </div>


    <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Amount paid</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="tamount" placeholder="500" required="true">
      </div>
  </div>


  <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">M-pesa code</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="tcode" placeholder="MLA7FKT1CO" required="true">
      </div>
  </div>
  <button type="submit" class="btn btn-success btn-block"   name="submit">Save</button>

  </form> 

</div>

</div>
    
   </div><br>
    
		 <style>
	 body {
       background-color:;
        border-radius: 2px;

   
  height: 100%;
  border-radius:30px;
  margin-left: 40px;
  margin-right: 40px; 
           }
    #footer{
      border: 2px;
  background-color: #CCFFFF;
  border-radius: 2px;
  height: 50px;
  margin-top: 0%;


    }
    #navbar{
      border-radius: 25px;
      border:2px solid black;
    }
    #bodycolor{ 
      
   background-repeat:no-repeat;
  background-size: cover;
      
       min-height:500px;
     }
       #black
       {
        background-color:black;
        border-color: solid black; 
         //float: left;
         height: 100%;
         width: 100%;
         margin-bottom: 1%;

  padding-right: 0px;
  padding-left: 0px;

       }



    
     </style>
    <?php
require('dbconn.php');

 if(isset($_POST['submit'])){
  $pname = $_POST['tname'];
  $idno = $_POST['tid'];
  $email=$_POST['temail'];
  $route=$_POST['troute'];
  $depdate=$_POST['tdepdate'];
   $seats=$_POST['tseats'];
  $amount=$_POST['tamount'];
  $code=$_POST['tcode'];
  
   
   $query="INSERT INTO  `matatu` .`ticket` (`pname`,`idno`,`email`,`route`,`depdate`,`seats`,`amount`,`code`) VALUES('$pname','$idno','$email','$route','$depdate','$seats','$amount','$code')";


if(mysqli_query($conn,$query)==TRUE) {
  echo "Ticket succesfully booked";
    echo "<br>";
    //header("location:..index.php"); // redirects to view
   }
   else
   {
    $errMSG = "error while inserting....";

     //$error = $mysqli->errno . ' ' . $mysqli->error;
    //echo $error;
   }
 }

  
 
?>








</div>
</body>
</html>