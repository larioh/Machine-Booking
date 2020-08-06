   <?php include('linker.php');?>
   <?php
require('dbconn.php');

 
 
  $query="SELECT sum(m_count) AS ball from bookings where model='Ploughing Tractors'";
  $result = mysqli_fetch_row(mysqli_query($conn, $query));

  //echo "Total : ".$result[0];
  $model1=$result[0];
  $qry3="UPDATE `farm_machines`.`Machine_numbers` SET `Figuires`='$model1' where Model='Ploughing Tractors'";
  if(mysqli_query($conn,$qry3)==TRUE) {
     
     
        }
        else{
          
        }
  echo "Ploughing Tractors:$model1<br>";

  $query1="SELECT sum(m_count) AS mall from bookings where model='Mowers'";
  $result1 = mysqli_fetch_row(mysqli_query($conn, $query1));

  //echo "Total : ".$result[0];
  $model2=$result1[0];
  $qry2="UPDATE `farm_machines`.`Machine_numbers` SET `Figuires`='$model2' where Model='Mowers'";
  if(mysqli_query($conn,$qry2)==TRUE) {
     
     
        }
        else{
          
        }

  echo "Mowers:$model2<br>";

 
  
  $query2="SELECT sum(m_count) AS mall from bookings where model='Plantors'";
  $result2 = mysqli_fetch_row(mysqli_query($conn, $query2));

  //echo "Total : ".$result[0];
  $model3=$result2[0];
  $qry="UPDATE `farm_machines`.`Machine_numbers` SET `Figuires`='$model3' where Model='Plantors'";
  if(mysqli_query($conn,$qry)==TRUE) {
     
     
        }
        else{
          
        }
  
  echo "Plantors:$model3<br>";
   $query3="SELECT sum(m_count) AS mall from bookings where model='Combine Harvestor'";
  $result3 = mysqli_fetch_row(mysqli_query($conn, $query3));

  //echo "Total : ".$result[0];
  $model4=$result3[0];
  $qry1="UPDATE `farm_machines`.`Machine_numbers` SET `Figuires`='$model4' where Model='Combine Harvestor'";
  if(mysqli_query($conn,$qry1)==TRUE) {
     
     
        }
        else{
          
        }
  
  echo "Combine Harvestor:$model4<br>";
  
  if($model1>$model2 && $model1>$model3&& $model1>$model4)
{
echo "Highly demanded machine is Ploughing tactors=".$model1;
}
else if($model2>$model1 && $model2>$model3 && $model2>$model4)
{
echo "Highly demanded machine is Mowers=".$model2;
}
else if($model3>$model1 && $model3>$model2&& $model3>$model4)
{
echo "Highly demanded machine is Plantors=".$model3;
}
else if($model4>$model1 && $model4>$model2&& $model4>$model3)
{
echo "Highly demanded machine is Combine Harvestor=".$model4;
}
else
{
echo"All Machines have the same demand";
}
  

