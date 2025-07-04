<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedetails";

// Create connection
$connection = mysqli_connect("localhost", "root","", "employeedetails");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get the selected date
//$CARD_STATUS = $_POST['Expired'];

// Fetch data for the selected date
$query = "SELECT * FROM card_details_table WHERE CARD_STATUS = 'Returned'";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

// Set headers for Excel file download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=ReturnedCardsReport_data.xls");

// Output data in Excel format
echo "NAME,SURNAME,COMPANY,SECURITYNUMBER,PHONENO,ID_PASSPORT,HID_NO,DATE,END_DATE,CARD_STATUS\n"; // Replace with your column names
while ($row = $result->fetch_assoc()) {
    echo "{$row['NAME']},{$row['SURNAME']},{$row['COMPANY']},{$row['SECURITYNUMBER']},{$row['PHONENO']},{$row['ID_PASSPORT']},{$row['HID_NO']},{$row['DATE']},{$row['END_DATE']},{$row['CARD_STATUS']}\n";// Replace with your column names
}

$stmt->close();
$connection->close();
?>