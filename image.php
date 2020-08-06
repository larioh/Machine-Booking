 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  


                <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Vehicles Available</h1>
                </div>
                   <div>
 <td><a href="vehicles.php" class="btn btn-info" role="button">Back to Booking</a></td>
 </div>
                        </div>
                <!-- /.col-lg-12 -->
              
        <div class="panel-body">
                        <div class="panel-header">  
                        
                <?php
                require 'dbconn.php';  
                $query = "SELECT * FROM machine ORDER BY v_entries DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result)) {  
                     echo '<div class="col-sm-3 col-md-6 col-lg-4">
                            
                          <tr>
                    
                    Vehicle Number:<td>'.($row['name']).'</td><br>
                    Amount per Day:<td>'.($row['amount']).'</td><br>
                    Vehicle Type:<td>'.($row['model']).'</td><br>

                    Vehicle Location:<td>'.($row['location']).'</td><br>

                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="300" width="300" class="img-thumnail" />  
                               </td>  
                            
                     </div></tr>';  
                }  
                ?>  
                         </div>
          
    </div> 
             
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  