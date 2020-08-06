<?php include('linker.php');?>
 <div id="page-wrapper" style="background-color:#90EE90;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#90EE90;">
                            Tractors
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-header">
                         <td><a href="vehicles.php" class="btn btn-success" role="button">Book Tractors</a></td>
                        </div>
                                             <div class="panel-body">
                                              
                            <div class="table table-striped table-bordered table-hove r" style="background-color:#90EE90">
                                <table class="table table-striped table-bordered table-hover" style="background-color: #90EE90">
                                    <thead style="background-color: #90EE90">
                                        <tr>
                                          <th>Entries </th>
                                           <th>Farmer name </th>
                                           
                                           <th>Tractor Name</th>
                                            <th>Location</th>
                                            
                                          
                                           
                                            <th>Phone Number</th>
                                         
                                            <th>Payment </th>
                                            <th>Status </th>
                                             <th>Date of booking </th>
                                             <th>Machine Status </th>
                                             <th>Return Machine </th>
        
                                             

                                            
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                    //session_start();
                                   // $idno=$_SESSION['certnumber'];
      $e_mail=$_SESSION['applicantusername'];
                    $query="SELECT bookings.`pname`, bookings.`idno`, bookings.`phone`, bookings.`name`, bookings.`location`, bookings.`book_status`, bookings.`created_at`, bookings.`payment`, bookings.`status`,farmer.`e_mail`  FROM `bookings`,`farmer` where farmer.`e_mail`='$e_mail' && bookings.idno=farmer.id_no && bookings.`book_status`='Active'";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      echo "Machines Booked =",  $count;
                                      $counts=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$counts.'</td>
                                            <td>'.$row['pname'].'</td>
                                           
                                            <td>'.$row['name'].'</td>
                                            
                                              <td>'.$row['location'].'</td>
                                               
                                              
                                
                                             
                                             <td>'.$row['phone'].'</td>
                                             <td>'.$row['payment'].'</td>
                                             <td>'.$row['status'].'</td>
                                              <td>'.$row['created_at'].'</td>
                                              <td>'.$row['book_status'].'</td>







                                            
                                             

                                          ';

                                        // issued IDNO
                                            
                                           
      echo '<td > <a href="return.php?variable1='.$row['name'].'&variable2='.$row['book_status'].'" class="btn btn-primary" role="button" >Retun Machine</a></td>';
                                            
                                            echo '</tr>';
                                            $counts++;
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
  <div class="modal-dialog modal-dialog-centered" role="document" style="border-radius:10px 10px 10px 10px;width: 40%;min-width: 200px";>
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bdfbdf;">
        <h5 class="modal-title" id="filldetails">Fill the Details below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalprofBody"style="width:40%;">

       
      </div>
      <div class="modal-footer" style="background-color:#bdfbdf;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
 <script type="text/javascript">
      
      $(document).on('click','.viewinfo',function(){
      var idno=$(this).data("id1");
   

      $.ajax({
        url:"test.php",
        method:"POST",
        data:{idno:idno},
        dataType:"text",
        success:function(data){
       $("#modalprofBody").html(data);
               $("#filldetails").html("Passenger Information");
              
                $("#modalDetails").modal('show');
         
    }
    
  });
  });
</script>
     

