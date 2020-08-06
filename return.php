 <?php include('linker.php');?>
 <div class="container">
        <div class="row">
            
           
        <div class="panel-body"style="background-color:#90EE90; ;margin-top: 0%;padding-bottom: 5px;border-radius: 15px 15px 15px 15px;height: 100%;width: 100%;">
             <div class="panel-heading">
                <h2 class="panel-title" style="text-align: center;font-size: 30px;"><b> Confirm Machine details below <b></h2><br><br>
                    </div>
            <form action="return.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
                <div class="container" style="padding-top: 2%;padding-bottom: 2%; width: 49%;min-width: 250px;border-radius: 15px 15px 15px 15px;" >

<!-- <form action="index.php" method="post"> -->

 <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Tractor Number</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="name" value="<?php echo $_GET['variable1']; ?>"   required="true" readonly="">
      </div>
  </div>
                                <!-- route -->
    <div class="form-group has-feedback">
        <label class="col-sm-3 control-label">Booking Status</label>
        <div class="col-sm-6"> 
        <input type="text" class="form-control" name="bokings" value="<?php echo $_GET['variable2'];?>"   required="true" readonly="">
        </div>
    </div>
    

  <button type="submit" class="btn btn-success btn-block"   name="submit">Return</button>

  </form> 

</div>

</div>
<?php
require('dbconn.php');

 if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $book_status = $_POST['bookings'];
   $updatemachines="UPDATE  `farm_machines`.`bookings` SET  `book_status` =  'Deactivated' WHERE  `bookings`.`name` ='".$name."'";



  if(mysqli_query($conn,$updatemachines)==TRUE) {
     echo '<script language="javascript">';
              echo 'alert("Machine Returned successfully")';
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
