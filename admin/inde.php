<?php include('linker.php');?>
<script type="text/javascript" src="datatables/js/jquery.dataTables.min.js" ></script>
<link rel="stylesheet" type="text/css" href="datatables/css/jquery.dataTables.css" >

 <div id="page-wrapper" style="background-color:#90EE90;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#90EE90;">
                            All Booked Tractors 
                        </div>
                       
                        <!-- /.panel-heading -->
                        <div class="panel-header">
                                                 
<!--a href="ticket.php" class="btn btn-success " role="button" >Book Tractor</a-->
<!-- <a href="page.php" class="btn btn-primary " role="button" >Reports</a> -->
                        
                                                </div>
                                             <div class="panel-body">
                                                <div class="" id="viewchilds">
                                             
                                            
                          
                                <table class="table table-striped table-bordered table-hover"id="mytable">
                                    <thead>
                                        <tr>
                                           <th>Entries </th>
                                        
                                            <th>Farmer</th>
                                           <th>Tractor Number</th>
                                           
                                            <th>Location</th>
                                            
                                             
                                           
                                            
                                         
                                            <th>Payment </th>
                                            <th>Status </th>
                                             <th>Date of booking </th>
        
                                             

                                            <th>Actions</th>
                                             
                                  </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                                    
                                    $query = "SELECT  *  FROM `bookings` order by created_at";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      $count=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$count.'</td>
                                            <td>'.$row['pname'].'</td>
                                           
                                            <td>'.$row['name'].'</td>
                                            
                                              <td>'.$row['location'].'</td>
                                               
                                              
                                
                                             
                                             
                                             <td>'.$row['payment'].'</td>
                                             <td>'.$row['status'].'</td>
                                              <td>'.$row['created_at'].'</td>

                                          ';

                                        // issued IDNO
                       echo '<td ><button class="viewprof btn btn-success" name="idno" data-id1="'.$row['idno'].'">View Profile</button></td>';
                       
echo'<td><a href="delete.php?idno='.$row['idno'].'" class="btn btn-danger " role="button" name="idno" data-id2="'.$row['idno'].'" >Delete</a></td>';



                                            
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
  <div class="modal-dialog modal-dialog-centered" role="document" style="border-radius:10px 10px 10px 10px;width: 70%;min-width: 200px";>
    <div class="modal-content">
      <div class="modal-header" style="background-color:#90EE90; ">
        <h5 class="modal-title" id="filldetails">Fill the Details below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalprofBody"  >

       
      </div>
      <div class="modal-footer" style="background-color:#90EE90; ">
       
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function () {
$('#mytable').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
  <script type="text/javascript">

//print
function printDiv() {
    //document.getElementById('').style.display = "block";
         var divToPrint = document.getElementById('page-wrapper');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:1px solid #000;' +
        'padding;0.5em;' +
        'text-align:center;'+
        '}' +
        '#page-wrapper{'+
        'text-align:center;'
        +'}'+
        '#ptable{'+
        'margin-left: auto;'+
        'margin-right: auto;'+
        'width:100%;'+
        +'}'+
         '#details{'+
        'margin-left: auto;'+
        'margin-right: auto;'+
        'width:100%;'+
        +'}'+
        '#hf{'+
    'text-decoration: underline;'
+'}'+
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
       }
</script>
 <script type="text/javascript">
      
      $(document).on('click','.viewprof',function(){
      var idno=$(this).data("id1");
   

      $.ajax({
        url:"test.php",
        method:"POST",
        data:{idno:idno},
        dataType:"text",
        success:function(data){
       $("#modalprofBody").html(data);
               $("#filldetails").html(" Applicant Information");
              
                $("#modalDetails").modal('show');
         
    }
    
  });
  });
        $(document).on('click','.printic',function(){
      var idno=$(this).data("id2");
   

      $.ajax({
        url:"print.php",
        method:"POST",
        data:{idno:idno},
        dataType:"text",
        success:function(data){
       $("#modalprofBody").html(data);
               $("#details").html(" Passenger Information");
              
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
    var idno=$(this).data("id1");
    var action=$(this).val();
  $.ajax({
    url:"test1.php",
    method:"POST",
    data:{action:action,idno:idno},
    dataType:"text",
    success:function(data){
    alert(data);
    }
    
  });
  });
      $(document).on('change','.Actions1',function(){
    var idno=$(this).data("id1");
    var action1=$(this).val();
  $.ajax({
    url:"test1.php",
    method:"POST",
    data:{action1:action1,idno:idno},
    dataType:"text",
    success:function(data){
    alert(data);
    }
    
  });
  })
    </script>
    <form enctype="text/plain"><br><br>
<!-- <input type="button" onclick="printDiv()" name="" value="print report"/> -->


</form>

   