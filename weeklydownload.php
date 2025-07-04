<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedetails";

// Create connection
$connection = mysqli_connect("localhost", "root","", "employeedetails");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch last 30 days of data
$query = "SELECT * FROM card_details_table WHERE (DATE) >= CURDATE() - INTERVAL 7 DAY";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    // Set headers for Excel file download
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=last_7_days_CardsReportdata.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    // Output column names
   // $columns = $result->fetch_fields();
   // foreach ($columns as $column) {
      //  echo "NAME,SURNAME,COMPANY,SECURITYNUMBER,PHONENO,ID_PASSPORT,HID_NO,DATE,END_DATE,CARD_STATUS\n";
    //}
   // echo "{$row['NAME']},{$row['SURNAME']},{$row['COMPANY']},{$row['SECURITYNUMBER']},{$row['PHONENO']},{$row['ID_PASSPORT']},{$row['HID_NO']},{$row['DATE']},{$row['END_DATE']},{$row['CARD_STATUS']}\n";

echo "NAME,SURNAME,COMPANY,SECURITYNUMBER,PHONENO,ID_PASSPORT,HID_NO,DATE,END_DATE,CARD_STATUS\n"; // Replace with your column names
while ($row = $result->fetch_assoc()) {
    echo "{$row['NAME']},{$row['SURNAME']},{$row['COMPANY']},{$row['SECURITYNUMBER']},{$row['PHONENO']},{$row['ID_PASSPORT']},{$row['HID_NO']},{$row['DATE']},{$row['END_DATE']},{$row['CARD_STATUS']}\n";// Replace with your column names

}
}
$connection->close();
?>
