<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedetails";

// Create connection
$connection = mysqli_connect("localhost", "root","", "employeedetails");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to update status
$sql = "UPDATE card_details_table
        SET status = 'Expired' 
        WHERE END_DATE < CURDATE()";

if ($connection->query($sql) === TRUE) {
    echo "Status updated successfully.";
} else {
    echo "Error updating status: " . $connection->error;
}

$conn->close();
?>
