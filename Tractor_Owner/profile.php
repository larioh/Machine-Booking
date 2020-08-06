<?php include('linker.php');?>
 <div id="page-wrapper" style="background-color:#90EE90;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#90EE90;">
                            My Machines
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-header">
                         
                        </div>
                                             <div class="panel-body">
                                              
                            <div class="table table-striped table-bordered table-hove r" style="background-color:#90EE90">
                                <table class="table table-striped table-bordered table-hover" style="background-color: #90EE90">
                                    <thead style="background-color: #90EE90">
                                        <tr>
                                          <th>Entries </th>
                                           
                                           
                                           <th>Tractor Name</th>
                                            <th>Location</th>
                                             
                                             <th>Model</th>
                                           
                                           
                                         
                                            <th>Lease Amount </th>
                                            
                                             
        
                                             

                                            
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                    //session_start();
                                   // $idno=$_SESSION['certnumber'];
      $e_mail=$_SESSION['applicantusername'];
                    $query="SELECT machine.`name`, machine.`location`, machine.`model`, machine.`amount`, machine.`status`, machine.`checkin`,machine.`rooms`  FROM `machine`,`tractor_owner` where tractor_owner.`e_mail`='$e_mail' && machine.`owner`=tractor_owner.`n_ame`";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      echo "Total Machines=",  $count;
                                      $counts=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$counts.'</td>
                                            <td>'.$row['name'].'</td>
                                           
                                            
                                              <td>'.$row['location'].'</td>
                                               
                                              
                                
                                             
                                             <td>'.$row['model'].'</td>
                                             <td>'.$row['amount'].'</td>
                                             
                                            







                                            
                                             

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
     

