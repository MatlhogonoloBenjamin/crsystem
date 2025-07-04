<?php 
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedetails";

// Create connection
$connection = mysqli_connect("localhost", "root","", "employeedetails");
    if($connection->connect_error){
        die("Connection failed".$Connection->connect_error);
    }
    echo "";
    
    ?>