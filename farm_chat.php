<?php include('linker.php');?>
 </style>

 <div id="page-wrapper" style="background-color:#90EE90;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#90EE90;">
                           Send Message 
                        
                       
                        
                        </div>
                        </div>
                                                 
                       


                        
                                                </div>
                                             <div class="panel-body">
                                                <div class="" id="viewchilds">
                                             
                                            
                          
                                <table class="table table-striped table-bordered table-hover"id="" style="background-color:#90EE90; ">
                                    <thead>
                                        <tr>
                                           <th>Entries </th>
                                        
                                            <th> Name </th>
                                           
                                           
                                            <th>Email</th>
                                            
                                             <th>Chat </th>
                                         
                                            
                                            

        
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                    //session_start();
                                   
                                    $query = "SELECT  *  FROM `farmer` where farmer_id!=$session_id";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      $count=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$count.'</td>
                                            <td>'.$row['farmer_id'].'</td>
                                            <td>'.$row['n_ame'].'</td>
                                           
                                            <td>'.$row['e_mail'].'</td>
                                            
                                               
                                          ';
                                          

                                        // issued IDNO
                      //echo '<td ><button  a href="ticket.php"   >Book ticket</button></a>
                      //</a>
                     echo '<td > <a href="chat.php?id='.$row['farmer_id'].'" class="btn btn-primary">Chat</a>

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