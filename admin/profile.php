<?php include('linker.php');?>
 <div id="page-wrapper" style="background-color:#aceace;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#aceace;">
                            Ticket to be processed
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-header">
                         <td><a href="#" class="btn btn-info" role="button">Add Ticket</a></td>
                        
                          <button  class="btn btn-info" id="Unpaidcertificates"> UnPaid Tickets</button>
                        
                         <button  class="btn btn-info" id="paidcertificates"> Paid Tickets</button>
                        
                         <td><a href="#" class="btn btn-info" role="button">Add Ticket</a></td>
                        </div>
                                             <div class="panel-body">
                                                <div class="" id="viewchilds">
                                             
                                            
                          
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                          <th>Sno </th>
                                            <th>chfname </th>
                                            <th>chsname</th>
                                            <th>chlname</th>
                                            
                                            
                                            <th>cert no</th>
                                          <th>Payment status</th>
                                            <th>Parents info </th>
                                            
        
                                             

                                            <th>Actions</th>
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                    //session_start();
                                   // $maxwaitingno=$_SESSION['certnumber'];
                                    $useremail=$_SESSION['adminusername'];
                                    $query = "SELECT  *  FROM `child1` order by maxwaitingno";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      $count=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$count.'</td>
                                            <td>'.$row['namef'].'</td>
                                            <td>'.$row['names'].'</td>
                                            <td>'.$row['surname'].'</td>
                                            
                                              <td>'.$row['maxwaitingno'].'</td>
                                               

                                
                                             <td>'.$row['payment'].'</td>

                                          ';

                                        // issued IDNO
                      echo '<td ><button class="viewprof" name="idno" data-id1="'.$row['maxwaitingno'].'">View Profile</button></td>';
                        echo '<td ><a href="printcert.php?maxwaitingno='.$row['maxwaitingno'].'"><button   name="print">Print cert</button></a></td>';
                                            
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
      <div class="modal-header" style="background-color:#bdfbdf;">
        <h5 class="modal-title" id="filldetails">Fill the Details below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalprofBody">

       
      </div>
      <div class="modal-footer" style="background-color:#bdfbdf;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
 <script type="text/javascript">
      
      $(document).on('click','.viewprof',function(){
      var maxwaitingno=$(this).data("id1");
   

      $.ajax({
        url:"test.php",
        method:"POST",
        data:{maxwaitingno:maxwaitingno},
        dataType:"text",
        success:function(data){
       $("#modalprofBody").html(data);
               $("#filldetails").html(" Applicant Information");
              
                $("#modalDetails").modal('show');
         
    }
    
  });
  });
     
       $(document).on('click','#paidcertificates',function(){
      

      $.ajax({
        url:"childreport.php",
        method:"POST",
        data:{"paidcertificates":"paidcertificates"},
        dataType:"text",
        success:function(data){
               $("#viewchilds").html(data);
         
    }
    
  });
  });
       $(document).on('click','#Unpaidcertificates',function(){
      

      $.ajax({
        url:"childreport.php",
        method:"POST",
        data:{"Unpaidcertificates":"Unpaidcertificates"},
        dataType:"text",
        success:function(data){
               $("#viewchilds").html(data);
         
    }
    
  });
  });
    $(document).on('change','.Actions',function(){
    var maxwaitingno=$(this).data("id1");
    var action=$(this).val();
  $.ajax({
    url:"test1.php",
    method:"POST",
    data:{action:action,maxwaitingno:maxwaitingno},
    dataType:"text",
    success:function(data){
    alert(data);
    }
    
  });
  });
      $(document).on('change','.Actions1',function(){
    var maxwaitingno=$(this).data("id1");
    var action1=$(this).val();
  $.ajax({
    url:"test1.php",
    method:"POST",
    data:{action1:action1,maxwaitingno:maxwaitingno},
    dataType:"text",
    success:function(data){
    alert(data);
    }
    
  });
  })
    </script>
   