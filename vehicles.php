<?php include('linker.php');?>

 <div id="page-wrapper" style="background-color:#90EE90;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#90EE90;">
                            Available Tractors
                        
                       
                        <!-- /.panel-heading -->
                        <div class="panel-header">
                         <td><a href="image.php" class="btn btn-success" role="button">View Tractors Images</a></td>
                        </div>
                        </div>
                                                 
                       


                        
                                                </div>
                                             <div class="panel-body">
                                                <div class="" id="viewchilds">
                                             
                                            
                          
                                <table class="table table-striped table-bordered table-hover"id="" style="background-color:#90EE90; ">
                                    <thead>
                                        <tr>
                                           <th>Entries </th>
                                        
                                            <th>Car Name </th>
                                           
                                           
                                            <th>Location</th>
                                            
                                             <th>Price</th>
                                           <th>Owner's number</th>
                                            <th>Tractor type</th>
                                            <th>Status</th>
                                         
                                            
                                            

        
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                    //session_start();
                                   
                                    $query = "SELECT  *  FROM `machine` where status='Available'";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      $count=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$count.'</td>
                                            <td>'.$row['name'].'</td>
                                           
                                            <td>'.$row['location'].'</td>
                                            <td>'.$row['amount'].'</td>
                                            <td>'.$row['rooms'].'</td>
                                              <td>'.$row['model'].'</td>
                                              <td>'.$row['status'].'</td>
                                               
                                          ';
                                          

                                        // issued IDNO
                      //echo '<td ><button  a href="ticket.php"   >Book ticket</button></a>
                      //</a>
                     echo '<td > <a href="ticket.php?variable1='.$row['name'].'&variable2='.$row['amount'].'&variable3='.$row['location'].'&variable4='.$row['rooms'].'&variable5='.$row['model'].'" class="btn btn-primary" role="button" >Book Now</a>

</td>';
                     

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
