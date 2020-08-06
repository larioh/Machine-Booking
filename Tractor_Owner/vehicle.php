<?php include('linker.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Farm MAchines Registration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    

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
            
           
        <div class="panel-body"style="background-color:#90EE90;margin-top: 0%;padding-bottom: 5px;border-radius: 15px 15px 15px 15px;height: 100%;width: 100%;">
             <div class="panel-heading">
                <h2 class="panel-title" style="text-align: center;font-size: 30px;"><b> Fill in Vehicle  details below <b></h2><br><br>
                    </div>
            <form action="vehicle.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
                <div class="container" style="padding-top: 2%;padding-bottom: 2%; width: 49%;min-width: 250px;border-radius: 15px 15px 15px 15px;" >
<!-- <form action="index.php" method="post"> -->


  <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Tractor Number</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="rname" placeholder="KCA 345T" required="true">
      </div>
  </div>




  <!-- <input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['d_time'].'" readonly> -->
    </div>
    <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Your Name</label>
      <div class="col-sm-6">
        <input type="text" name="owner"   value="<?php echo $firstname; ?>" readonly=""  />
      </div>
  </div>




  <!-- <input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['d_time'].'" readonly> -->
    </div>
    <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Location</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="lname" placeholder="Kajiado-Rongai" required="true">
      </div>
  </div>




  <!-- <input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['d_time'].'" readonly> -->
    </div>
 <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Tractor Type</label>
<div class="col-sm-6">
<select name="thouse" class="col-sm-12">
<option value="Combine Harvestor">Combine Harvestor </option>
<option value="Mowers">Mowers </option>
<option value="Ploughing Tractors ">Ploughing Tractors </option>
<option value="Plantors">Plantors </option>
</select><br>
  </div>
 </div>
  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Lease Amount</label>
<div class="col-sm-6">
  <input type="text" class="form-control" name="amount" placeholder=" for example 15000" required="true">
      </div>
 </div>
   <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Month Available</label>
<div class="col-sm-6">
<select name="vtime" class="col-sm-12">
<option value="January">January </option>
<option value="February">February </option>
<option value="March ">March </option>
<option value="April">April </option>
<option value="May">May </option>
<option value="June ">June</option>
<option value="July">July </option>
<option value="August">August </option>
<option value="September">September </option>
<option value="October">October </option>
<option value="November">November </option>
<option value="December">December </option>
</select><br>
  </div>
 </div>

  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Phone Number</label>
<div class="col-sm-6">
  <input type="text" class="form-control" name="rooms" placeholder=" 073753592" required="true">
      </div>
 </div>
  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Image</label>
<div class="col-sm-6">
  <input type="file" class="form-control" name="image"  required="true">
      </div>
 </div>


  <button type="submit" class="btn btn-success btn-block"   name="submit">Submit</button>

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
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $name = $_POST['rname'];
  $owner = $_POST['owner'];
  $location = $_POST['lname'];
  $model=$_POST['thouse'];
  $amount=$_POST['amount'];
  $checkin=$_POST['vtime'];
  $rooms=$_POST['rooms'];
  
  
   
   $query="INSERT INTO  `farm_machines` .`machine` (`name`,`owner`,`image`,`location`,`model`,`amount`,`checkin`,`rooms`,`status`) VALUES('$name','$owner','$file','$location','$model','$amount','$checkin','$rooms','Available')";


if(mysqli_query($conn,$query)==TRUE) {
  echo '<script language="javascript">';
              echo 'alert("Machine registered successfully")';
              echo '</script>';
              echo "<script>window.open('profile.php','_self')</script>";
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