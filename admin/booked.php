<!DOCTYPE html>
<html lang="en">

<head>
  

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
   
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" >


    <!-- Custom Fonts -->
    
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="../bootsrap/scripts/bootstrap.js"></script>
<script src="../bootstrap/scripts/jquery.js"></script>
<script src="../bootstrap/scripts/bootstrap.min.js"></script>
<div id="page-wrapper" style="background-color:#aceace;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#aceace;">
                            Booked Vehicles report
                             
                        </div>
                        <!-- /.panel-heading -->
                   
                                             <div class="panel-body">
                                                <div class="" id="viewchilds">
                                             
                                            
                          
                                
<table>
                                    <thead>
                                        <tr>
                                           <th>Entries </th>
                                        
                                            <th>Vehicle name </th>
                                           
                                            
                                            
                                            
                                             <th>Location</th>
                                           
                                            <th>Model</th>
                                            <th>Amount</th>
                                             <th>Status </th>
                                            <th>Phone Number </th>
                                            
                                             
        
                                             

                                            
                                             
                                  </tr>
                                   </thead>
                                    <tbody>

                                    <?php
                                    require('dbconn.php');

                                   
                                    $query = "SELECT  *  FROM `Machine` where status='Booked'";
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
                                             <td>'.$row['status'].'</td>
                                              <td>'.$row['rooms'].'</td>

                                          ';

                                        // issued IDNO
                     
                                            
                                            echo '</tr>';
                                            $count++;
                                      }
                                    }

                                    ?>
                                    </tbody>

                                </table>
                              

                            </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                            <script type="text/javascript">
  
//print
function printDiv() {
    //document.getElementById('').style.display = "block";
         var divToPrint = document.getElementById('page-wrapper');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:1px solid:white;' +
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

  <form enctype="text/plain"><br><br>
<input type="button" onclick="printDiv()" name="" value="print report"/>
<a href="index.php" class="btn btn-primary " role="button" >Home</a>
 <style type="text/css">
      table, th, td {
       border:none;
      }
      tr.hide_right > td, td.hide_right{
        border-right-style:hidden;
      }
      tr.hide_all > td, td.hide_all{
        border-style:hidden;
      }
  }
</style>

</form>

                          