<?php

if (isset($_POST['download'])) {
    // Database connection
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'employeedetails';

   $connection = mysqli_connect("localhost", "root","", "employeedetails");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Define datasets to export
    $card_details_table = ['card_details_table']; // Replace with your table names

    // Create a ZIP file to store all Excel files
    $zip = new ZipArchive();
    $zipFileName = 'excel_files.zip';
    if ($zip->open($zipFileName, ZipArchive::CREATE) !== TRUE) {
        die("Could not create ZIP file.");
    }

    foreach ($card_details_table as $card_details_table) {
        // Fetch data from each table
        $result = $connection->query("SELECT * FROM $card_details_table");
        if ($result->num_rows > 0) {
            $fileName = "$card_details_table.xlsx";
            $fileContent = "NAME,SURNAME,COMPANY,SECURITYNUMBER,PHONENO,ID_PASSPORT,HID_NO,DATE,END_DATE,CARD_STATUS\n"; // Adjust columns as per your table structure

            while ($row = $result->fetch_assoc()) {
                $fileContent .= "{$row['NAME']},{$row['SURNAME']},{$row['COMPANY']},{$row['SECURITYNUMBER']},{$row['PHONENO']},{$row['ID_PASSPORT']},{$row['HID_NO']},{$row['DATE']},{$row['END_DATE']},{$row['CARD_STATUS']}\n"; // Adjust fields
            }

            // Add the file to the ZIP archive
            $zip->addFromString($fileName, $fileContent);
        }
    }

    $zip->close();
    $connection->close();

    // Force download of the ZIP file
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
    header('Content-Length: ' . filesize($zipFileName));
    readfile($zipFileName);
 
    // Clean up
    unlink($zipFileName);
    exit;
}
?>


