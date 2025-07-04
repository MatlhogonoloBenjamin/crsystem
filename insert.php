<!DOCTYPE html>
<html>
<head>
 <title>SUBMIT DATA</title>
</head>
<body>
 <center>
      <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => employeedetails



        $conn = mysqli_connect("localhost", "root","", "employeedetails");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 9 values from the form data(input)
        $NAME =  $_REQUEST['NAME'];
        $SURNAME = $_REQUEST['SURNAME'];
        $COMPANY =  $_REQUEST['COMPANY'];
        $SECURITYNUMBER = $_REQUEST['SECURITYNUMBER'];
        $PHONENO = $_REQUEST['PHONENO'];
        $ID_PASSPORT = $_REQUEST['ID_PASSPORT'];
        $HID_NO = $_REQUEST['HID_NO'];
        $DATE = $_REQUEST['DATE'];
		$END_DATE = $_REQUEST['END_DATE'];
        $CARD_STATUS = $_REQUEST['CARD_STATUS'];
        
        // Performing insert query execution
        // here our table name is employeedetails

        $sql = "INSERT INTO card_details_table VALUES ('$NAME', 
            '$SURNAME','$COMPANY','$SECURITYNUMBER','$PHONENO','$ID_PASSPORT','$HID_NO','$DATE','$END_DATE','$CARD_STATUS')";
        
        if(mysqli_query($conn, $sql))
            {
            echo "<h3>DATA SUBMITTED SUCCESSFULLY!!!</h3>";
                

            echo nl2br("<script type='text/javascript'>document.location = 'index.html'</script>");
			 
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
 </center>
</body>
</html>

