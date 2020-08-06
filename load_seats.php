 <?php
           require('dbconn.php');
           $name=$_POST['name'];
            $location=$_POST['location'];
              $sql = "SELECT *  FROM machine where location='".$location."' order by location";
              $result=mysqli_query($conn,$sql);
              $output='';
              $seat=1;
              $output.='<option value="">Select Room</option>';
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  $seatsno=$row["rooms"];
                  while ($seat <= $seatsno) {
                          $sql1 = "SELECT *  FROM bookings where name='".$name."' && location='".$location."' && seats='$seat' order by seats";
                          $result1=mysqli_query($conn,$sql1);
                          if(mysqli_num_rows($result1)>0){
                        // break;
                        }
                        else{
                          $output.='<option value="'.$seat.'">'.$seat.'</option>';
                        }

                   
                    $seat++;
                  }
                
                }
              }
              else{
                $output.='<option value="" selected>No Seat Found</option>';
              }
              echo $output;
              ?>

