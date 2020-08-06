<?php include('linker.php');?>

 <div id="page-wrapper" style="background-color:#90EE90;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#90EE90;">
                            Farmers who booked Machines
                        </div>
                       
                        <!-- /.panel-heading -->
                        <div class="panel-header">
                                                 
                          <!-- <button  class="btn btn-info" id="Unpaidcertificates"> Pending Tickets</button>
                        
                         <button  class="btn btn-info" id="paidcertificates"> Approved Tickets</button> -->
                         <!-- <button  class="btn btn-success" id=""> <a href="index.php">Home</a>
                         </button> -->
<a href="vehicle.php" class="btn btn-success " role="button" >Add Machine</a>
<!-- <a href="page.php" class="btn btn-primary " role="button" >Reports</a> -->
                        
                                                </div>
                                             <div class="panel-body">
                                                <div class="" id="viewchilds">
                                             
                                            
                          
                                <table class="table table-striped table-bordered table-hover"id="">
                                    <thead>
                                        <tr>
                                           <th>Entries </th>
                                        
                                            <th>Farmer  Name</th>
                                           
                                           <th>Farmer's Number</th>
                                            
                                            
                                             
                                           <th>Vehicle Name</th>
                                            <th>Hiring Price</th>
                                         
                                            
                                            <th>Location</th>
                                            <th>Status of Booking</th>
                                            <th>Custodian Payment</th>
                                            

        
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                    //session_start();
                                   // $maxwaitingno=$_SESSION['certnumber'];
                                    //$useremail=$_SESSION['adminusername'];
                                    $query = "SELECT bookings.`pname`, bookings.`idno`, bookings.`phone`, bookings.`name`, bookings.`location`, bookings.`book_status`, bookings.`created_at`, bookings.`amount`, bookings.`status`,machine.`rooms`  FROM `bookings`,`machine` where machine.`owner`='$firstname' && bookings.onumber=machine.rooms";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      $count=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$count.'</td>
                                            <td>'.$row['pname'].'</td>
                                           
                                            <td>'.$row['phone'].'</td>
                                            
                                              <td>'.$row['name'].'</td>
                                               
                                              
                                
                                             <td>'.$row['amount'].'</td>
                                             <td>'.$row['location'].'</td>
                                            
                                             <td>'.$row['status'].'</td>
                                             

                                          ';

                     
                     echo'<td><a href="paycustodian.php"class="btn btn-primary " role="button">Pay Custodian</a></td>';


                     


                      //echo '<td ><button class="book" name="book" data-id5="'.$row['car_no'].'">Print ticket</button></td>';


                                            
                                            echo '</tr>';
                                            $count++;
                                      }
                                    }

                                    ?>
                                    </tbody>

                                </table>
                              

                            </div>
                            <!-- /.table-responsive -->
                        </div>
                <!-- /.col-lg-12 -->
              
        
          
    
     </div>
      </div>
       </div>
        </div>
             <div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="filldetails" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document" style="border-radius:10px 10px 10px 10px;width: 90%;min-width: 200px";>
    <div class="modal-content">
      <div class="modal-header" style="background-color:#90EE90;">
        <h5 class="modal-title" id="filldetails">Fill the Details below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalprofBody">

       
      </div>
      <div class="modal-footer" style="background-color:#90EE90;">
       
        
      </div>
    </div>
  </div>
</div>
 <script type="text/javascript">

      $(document).on('click','.book',function(){
      var car_no=$(this).data("id5");
      $.ajax({
        url:"book.php",
        method:"POST",
        data:{car_no:car_no},
        dataType:"text",
        success:function(data){
       $("#modalprofBody").html(data);
               $("#filldetails").html(" Passenger Information");
              
                $("#modalDetails").modal('show');
         
    }
    
  });
  });
         $(document).on('change','.Actions1',function(){
          
    var car_no=$(this).data("id5");
   
  $.ajax({
    url:"info.php",
    method:"POST",
    data:{car_no:car_no},
    dataType:"text",
    success:function(data){
    alert(data);
    }
  
    
  });
  })
 
   </script>
