<?php include('linker.php');?>
<html>
<head>
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="panel-body"style="background-color:#90EE90;margin-bottom: 5px ;width: 90%;min-height: 250px;margin-left: 8%;padding-bottom: 5px; border-radius: 15px 15px 15px 15px;">
             <div class="panel-heading">
                <h2 class="panel-title" style="text-align: center;font-size: 25px;"><b> Provide Payment Details below <b></h2><br><br>
                    </div>
            <form action="paycustodian.php" method="post">
                <div class="form-group">
      <label for="inputname"class="col-sm-1 control-label">Amount</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" name="amt" placeholder="amount" required="true">
      </div>
      <label for="recep"class="col-sm-1 control-label">M-pesa code</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="m-pesa" placeholder="M-pesa code" required="true">
      </div>
      <label for="inputname"class="col-sm-1 control-label">Date</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" name="date" placeholder="date" required="true">
      </div>

    </div><br><br>

                 <button type="submit" class="btn btn-success btn btn-block" name="Submit"> Donate</button><br>
            </form>
        
        </div>
    </body>
    <div id="page-wrapper" style="background-color:#90EE90;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#90EE90;">
                            Payment list
                        </div>
                        <panel-heading>
                        
                                             <div class="panel-body">
                                              
                            <div class="table table-striped table-bordered table-hove r">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                          <th>Entries </th>
                                            <th>Landlord  Name </th>
                                            <th>id number</th>
                                            <th>Amount</th>
                                            <th>Payment Date</th>
                                            <th>M-pesa code</th>
                                            
                                           
                                             

                                            
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                  
   
  
                    $query="SELECT* from farm_machines.`cpayment`";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      echo $count;
                                      $counts=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$counts.'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['id_no'].'</td>
                                            <td>'.$row['receipt'].'</td>
                                           
                                              <td>'.$row['dates'].'</td>
                                               <td>'.$row['moneys'].'</td>

                                            
                                            

                                          ';

                                        // issued IDNO
                                           
                                            
                                            echo '</tr>';
                                            $counts++;
                                      }
                                    }

                                    ?>
                                    </tbody>

                                </table>

                            </div>
                            <!-- table-responsive-->
               

</html>

<?php
require('dbconn.php');


  if(isset($_POST['Submit']) ){

  $receipt = $_POST['amt'];
  $dates = $_POST['date'];
  $moneys = $_POST['m-pesa'];


            
  
 $insertsql="INSERT INTO `farm_machines`.`cpayment` (`receipt`, `dates`, `moneys`, `name`,`id_no`) VALUES ( '$receipt','$dates','$moneys','$firstname','$idnum')";

 if(mysqli_query($conn,$insertsql)==TRUE) {
    echo '<script language="javascript">';
              echo 'alert("Payment was successfully")';
              echo '</script>';
              echo "<script>window.open('index.php','_self')</script>";
        }
         else{
      echo"error".mysqli_error($conn);
      
    }

}
  ?>