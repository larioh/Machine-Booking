<?php include('linker.php');?>
<!-- <style type="text/css">
      table, th, td {
       border: 2px solid black;
      }
      tr.hide_right > td, td.hide_right{
        border-right-style:hidden;
      }
      tr.hide_all > td, td.hide_all{
        border-style:hidden;
      }
  }
  table th, table td {
        border:1px solid #000; 
        padding;0.5em; 
        text-align:center;
      }
</style> -->

 <div id="page-wrapper" style="background-color:#90EE90;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#90EE90;">
                            Available Machinery
                        </div>
                       
                        <!-- /.panel-heading -->
                        <div class="panel-header">
                                                 
                          <!-- <button  class="btn btn-info" id="Unpaidcertificates"> Pending Tickets</button>
                        
                         <button  class="btn btn-info" id="paidcertificates"> Approved Tickets</button> -->
                         <!-- <button  class="btn btn-success" id=""> <a href="index.php">Home</a>
                         </button> -->
<!--a href="vehicle.php" class="btn btn-success " role="button" >Add Tractor</a-->
<!-- <a href="page.php" class="btn btn-primary " role="button" >Reports</a> -->
                        
                                                </div>
                                             <div class="panel-body">
                                                <div class="" id="viewchilds">
                                             
                                            
                          
                                <table class="table table-striped table-bordered table-hover"id="table">
                                    <thead>
                                        <tr class="hide_all">
                                           <th>Entries </th>
                                        
                                            <th>Tractor Name</th>
                                           
                                           
                                            <th>Location</th>
                                            
                                             <th>Tractor Type</th>

                                           
                                            <th>Lease Price</th>
                                         
                                            
                                            
                                            <th>Action1</th>
                                            <th>Action2</th>
                                            

        
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                    //session_start();
                                   // $maxwaitingno=$_SESSION['certnumber'];
                                    //$useremail=$_SESSION['adminusername'];
                                    $query = "SELECT  *  FROM `machine` order by name";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      $count=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$count.'</td>
                                            <td>'.$row['name'].'</td>
                                           
                                            <td>'.$row['location'].'</td>
                                            
                                              <td>'.$row['model'].'</td>
                                               
                                              
                                
                                             <td>'.$row['amount'].'</td>
                                             
                                            
                                             
                                             

                                          ';

                                        // issued IDNO
                      //echo '<td ><button  a href="ticket.php"   >Book ticket</button></a>
                      //</a>
                     //echo '<td > <a href="ticket.php" class="btn btn-primary" role="button" >Book Now</a></td>';


                     echo'<td><a href="delete_vehicle.php?name='.$row['name'].'" class="btn btn-danger " role="button" name="name" data-id2="'.$row['name'].'" >Delete</a></td>';
                     echo '<td > <a href="update.php?variable1='.$row['name'].'&variable2='.$row['amount'].'&variable3='.$row['location'].'&variable4='.$row['model'].'" class="btn btn-primary" role="button" >Update</a></td>';


                     


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
