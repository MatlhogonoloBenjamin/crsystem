<?php
// Database connection
$conn = mysqli_connect("localhost", "root","", "employeedetails");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch today's data
$date = date('Y-m-d'); // Current date
$sql = "SELECT * FROM card_details_table WHERE DATE(created_at) = '$date'";
$result = $conn->query($sql);
?>


<?php
if ($result->num_rows > 0) {
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=today_data_" . $date . ".xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    // Start output buffer
    echo "Column1\tColumn2\tColumn3\n"; // Replace with your column names

    while ($row = $result->fetch_assoc()) {
        echo $row['NAME'] . "\t" . $row['SURNAME'] . "\t" . $row['COMPANY'] . $row['SECURITYNUMBER'] . "\t" . $row['PHONENO'] . "\t" . $row['ID_PASSPORT'] . $row['HID_NO'] . "\t" . $row['DATE'] . "\t" . $row['END_DATE'] . "\t" . $row['CARD_STATUS'] . "\n"; // Replace with your column data
    }
    exit;
} else {
    echo "No data found for today.";
}
?>
