<?php
//Step1
 // if you run on local server the name is "localhost:3306". If you run on cs server, use only "localhost"
 $servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
         
 if(! $conn ){
               die('Could not connect: ' . mysqli_error($conn));
  }
  //else
	  //echo "Database Connection was successful";
?>