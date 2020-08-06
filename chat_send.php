	
<?php
    	
	require'dbconn.php';
	if(isset($_POST['submit'])){
	
    
    		
    $mymsg=$_POST['mymsg'];
    //$msg=$_POST['msg'];
    $frm_id=$_POST['my_id'];
    

    $to_id=$_GET['id'];
    $ctime=date("h:i:s");
    $stts="1";

     $q="INSERT INTO chat(from_id,to_id,message,chattime) values('$frm_id','$to_id','$mymsg','$ctime')";
     if(mysqli_query($conn,$q)==TRUE) {
  
    header("location:chat.php?id=".$to_id);
     
  
	
}}

