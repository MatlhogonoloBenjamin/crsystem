
<?php  
 
// Checking data by post method
if(isset($_POST["export"])) {  
 
    // Connect to our data base
    $connection = mysqli_connect("localhost", 
        "root", "", "employeedetails");  
 
    // Accept csv or text files
    header('Content-Type: text/csv; charset=utf-8');  
 
    // Download csv file as geeksdata.csv
    header('Content-Disposition: attachment; 
        filename=geeksdata.pdf');  
 
    // Storing data 
    $output = fopen("php://output", "w");  
 
    // Placing data using fputcsv
    fputcsv($output, array('NAME','SURNAME','COMPANY','SECURITYNUMBER','PHONENO','ID_PASSPORT','HID_NO','DATE','END_DATE','CARD_STATUS')); // Replace with your column data
    }
 
    // SQL query to fetch data from our table
    $query = "SELECT * from card_details_table";  
 
    // Result
    $result = mysqli_query($connection, $query);  
 
    while($row = mysqli_fetch_assoc($result)) {  
 
        // Fetching all rows of data one by one
        fputcsv($output, $row);  
    }
 
    // Closing tag
    fclose($output);  

?>