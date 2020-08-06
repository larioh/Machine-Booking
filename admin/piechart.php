<!DOCTYPE html>
<html lang="en">
<head>
    <title>Piechart Report</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
 
<?php
    //include the library
    include "libchart/libchart/classes/libchart.php";
 
    //new pie chart instance
    $chart = new PieChart( 500, 300 );
 
    //data set instance
    $dataSet = new XYDataSet();
    
    //actual data
    //get data from the database
    
    //include database connection
    include 'dbconn.php';
 
    //query all records from the database
    $query = "select * from Machine_numbers";
 
    //execute the query
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    //$result = $mysqli->query( $query );
 
    //get number of rows returned
    $num_results = $result->num_rows;
 
    if( $num_results > 0){
    
        while( $row = $result->fetch_assoc() ){
            extract($row);
            $dataSet->addPoint(new Point("{$Model} {$Figuires})", $Figuires));
        }
    
        //finalize dataset
        $chart->setDataSet($dataSet);
 
        //set chart title
        $chart->setTitle(" Machine Data Bookings");
        
        //render as an image and store under "generated" folder
        $chart->render("libchart\demo\generated/PoweredBy.png");
    
        //pull the generated chart where it was stored
        echo "<img alt='Pie chart'  src='libchart\demo\generated/PoweredBy.png' style='border: 1px solid gray;'/>";
    
    }else{
        echo "No Tracots found database.";
    }
?>
 
</body>
</html>