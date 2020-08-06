<?php include('linker.php');?> 
    <?php
require('dbconn.php');

 if(isset($_POST['submit'])){
  $pname = $_POST['tname'];
  $name = $_POST['name'];
  $idno = $_POST['tid'];
  $location=$_POST['location'];
  $onumber=$_POST['wnumber'];
  $phone=$_POST['tdepdate'];
  $amount = $_POST['amount'];
  $code=$_POST['tcode'];
  $model=$_POST['mmodel'];

  
   
   $query="INSERT INTO  `farm_machines` .`bookings` (name,`pname`,`idno`,`location`,`onumber`,`phone`,`code`,`amount`,`book_status`,`model`,`m_count`) VALUES('$name','$pname','$idno','$location','$onumber','$phone','$code','$amount','Active','$model','1')";
   $updatemachines="UPDATE  `farm_machines`.`machine` SET  `status` =  'Booked' WHERE  `machine`.`name` ='$name'";


if(mysqli_query($conn,$query)==TRUE) {
  if(mysqli_query($conn,$updatemachines)==TRUE) {
     echo '<script language="javascript">';
              echo 'alert("Machine booked successfully")';
              echo '</script>';
              echo "<script>window.open('profile.php','_self')</script>";
     
        }
    else{
     // echo"error".mysqli_error($conn);
    }
  
   }
   else
   {
    $errMSG = "error while inserting....";

     //$error = $mysqli->errno . ' ' . $mysqli->error;
    //echo $error;
   }
 }

  
?> 
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tractors Booking</title>
    

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
            
           
        <div class="panel-body"style="background-color:#90EE90; ;margin-top: 0%;padding-bottom: 5px;border-radius: 15px 15px 15px 15px;height: 100%;width: 100%;">
             <div class="panel-heading">
                <h2 class="panel-title" style="text-align: center;font-size: 30px;"><b> Provide Farmer details below <b></h2><br><br>
                    </div>
            <form action="ticket.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
                <div class="container" style="padding-top: 2%;padding-bottom: 2%; width: 49%;min-width: 250px;border-radius: 15px 15px 15px 15px;" >

<!-- <form action="index.php" method="post"> -->

 <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Machine Number</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="name" value="<?php echo $_GET['variable1']; ?>"   required="true" readonly="">
      </div>
  </div>
  <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Machine Model</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="mmodel" value="<?php echo $_GET['variable5']; ?>"   required="true" readonly="">
      </div>
  </div>
                                <!-- route -->
    <div class="form-group has-feedback">
        <label class="col-sm-3 control-label">Location</label>
        <div class="col-sm-6"> 
        <input type="text" class="form-control" name="location" value="<?php echo $_GET['variable3'];?>"   required="true" readonly="">
        </div>
    </div>
    <div class="form-group has-feedback">
        <label class="col-sm-3 control-label">Owner's Phone Number</label>
        <div class="col-sm-6"> 
        <input type="text" class="form-control" name="wnumber" value="<?php echo $_GET['variable4'];?>"   required="true" readonly="">
        </div>
    </div>
                                <!-- end route -->
    <!--  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Route</label>
<div class="col-sm-6">
<select name="troute" id="troute" class="col-sm-12">
<option value="Meru">Nairobi-Meru </option>
<option value="Nakuru">Nairobi-Nakuru </option>
<option value="Eldoret">Nairobi-Eldoret </option>
</select><br>
  </div>
 </div> -->
<div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Amount paid</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="amount" value="<?php echo $_GET['variable2']; ?>"   required="true" readonly="">
      </div>
  </div> 
  <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">M-pesa code</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="tcode" placeholder="MLA7FKT1CO" required="true">
      </div>
  </div>

  <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Full names</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="tname"  required="true">
      </div>
  </div>
    </div>
   
    <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Id number</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="tid"  required="true"value="<?php echo $idnum; ?>" readonly="">
      </div>
  </div>


   <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Your Phone Number</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="tdepdate" placeholder="0719456789" required="true">
      </div>
  </div>

  <button type="submit" class="btn btn-success btn-block"   name="submit">Save</button>

  </form> 

</div>

</div>
    
   </div><br>
   <a href="profile.php" class="btn btn-success" role="button" >View Tractors Booked</a>










    
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



</div>
</body>
<script type="text/javascript">
  $(document).on('change','#name', function(){ 
  var name=$('#name').val();
 // alert(name);
  $.ajax({
    url:"load_car.php",
    method:"POST",
    data:{name},
    dataType:"text",
    success:function(data){
      $('#location').html(data);
    }
    //load number of seats
  });
  // $.ajax({
  //   url:"load_seater.php",
  //   method:"POST",
  //   data:{car_no},
  //   dataType:"text",
  //   success:function(data){
  //     $('#troute').html(data);
  //   }
    
  // });
 });
  $(document).on('change','#location', function(){ 
  var name=$('#name').val();
  var location="location";
  var location=$('#location').val();
 // alert(car_no);
 //select amount
  $.ajax({
    url:"load_route.php",
    method:"POST",
    data:{location:location,name:name,location:location},
    dataType:"text",
    success:function(data){
      $('#amount').val(data);
     //alert(data);
    }
    
  });
  //select seats
   $.ajax({
    url:"load_seats.php",
    method:"POST",
    data:{name:name,location:location},
    dataType:"text",
    success:function(data){
      $('#rooms').html(data);
     //alert(data);
    }
    
  });
 });
</script>
</html>