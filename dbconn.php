<?php
		$server="127.0.0.1";
		$user="root";
		$pass="";
		$databasename="farm_machines";
		$conn=mysqli_connect($server,$user,$pass) or die("Could not establish a secure connection to server");
		mysqli_select_db($conn,$databasename) or die ("Could not connect to the Database specified");

?>