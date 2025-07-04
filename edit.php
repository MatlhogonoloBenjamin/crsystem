<?php
  include "connection.php";
  $NAME="";
  $SURNAME="";
  $COMPANY="";
  $SECURITYNUMBER="";
  $PHONENO="";
  $ID_PASSPORT="";
  $HID_NO="";
  $DATE="";
  $END_DATE="";
  $CARD_STATUS="";


  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['SECURITYNUMBER'])){
     
    
    $SECURITYNUMBER = $_POST['SECURITYNUMBER'];
    $sql = "select * from card_details_table where SECURITYNUMBER=$SECURITYNUMBER";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: crud100/index.php");
      exit;
    }
     $NAME = $_POST['NAME'];
	 $SURNAME = $_POST['SURNAME'];
	 $COMPANY=$_POST['COMPANY'];
	 $SECURITYNUMBER=$_POST['SECURITYNUMBER'];
	 $PHONENO=$_POST['PHONENO'];
	 $ID_PASSPORT=$_POST['ID_PASSPORT'];
	 $HID_NO=$_POST['HID_NO'];
	 $DATE=$_POST['DATE'];
	 $END_DATE_POST['END_DATE'];
	 $CARD_STATUS=$_POST['CARD_STATUS'];

  }
  else{
  
  	 $NAME = $_POST['NAME'];
	 $SURNAME = $_POST['SURNAME'];
	 $COMPANY=$_POST['COMPANY'];
	 $SECURITYNUMBER=$_POST['SECURITYNUMBER'];
	 $PHONENO=$_POST['PHONENO'];
	 $ID_PASSPORT=$_POST['ID_PASSPORT'];
	 $HID_NO=$_POST['HID_NO'];
	 $DATE=$_POST['DATE'];
	 $CARD_STATUS=$_POST['CARD_STATUS'];

    
		$sql = "update card_details_table set NAME='$NAME',SURNAME='$SURNAME',COMPANY='$COMPANY',SECURITYNUMBER='$SECURITYNUMBER',PHONENO='$PHONENO',
ID_PASSPORT='$ID_PASSPORT',HID_NO='$HID_NO',DATE='$DATE',CARD_STATUS='$CARD_STATUS' where SECURITYNUMBER='$SECURITYNUMBER'";
	$result = $connection->query($sql);
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 	 <form action="" method="POST">
    <div class="container2">
   
     <div class="form-group row">

     <div class="col-xs-4">
        <label for="Name">Names</label>
        <input type="text" placeholder="NAME" name="NAME" id="NAME" value="<?php echo $row['NAME'] ?>" required>
		
      </div></td>
      <div class="col-xs-4">
        <label for="Surname">Surname</label>
        <input type="text" placeholder="Surname" name="SURNAME" id="SURNAME" value="<?php echo $row['SURNAME'] ?>" required>
      </div>
      <div class="col-xs-4">
        <label for="Company">Company</label>
        <input type="text" placeholder="Company" name="COMPANY" id="COMPANY" value="<?php echo $row['COMPANY'] ?>"required>
      </div><br><br>
      
      <div class="col-xs-4">
        <label for="Security Number">Sec No</label>
        <input type="text" placeholder="Security Number" name="SECURITYNUMBER" id="SECURITYNUMBER" value="<?php echo $row['SECURITYNUMBER'] ?>"required>
      </div>
      <div class="col-xs-4">
       <label for="Phone">PhoneNo</label>
        <input type="number" placeholder="Phone Number" name="PHONENO" id="PHONENO" value="<?php echo $row['PHONENO'] ?>" required>
      </div>
      
      <div class="col-xs-4">
        <label for="id/passport">IdNumber</label>
        <input type="text" placeholder="ID/Passport" name="ID_PASSPORT" id="ID_PASSPORT" value="<?php echo $row['ID_PASSPORT'] ?>"required>
      </div>
      
      <div class="col-xs-4">
        <label for="HID">HID No</label>
        <input type="number" placeholder="HID Number" name="HID_NO" id="HID_NO" value="<?php echo $row['HID_NO'] ?>"required>
      </div><br><br>
   
     

       <div class="col-xs-4">
        <label for="Date">Date</label>
        <input type="date" name="DATE" id="DATE" value="<?php echo $row['DATE'] ?>" required>
      </div>
	  
	   <div class="col-xs-4">
        <label for="Date">End Date</label>
        <input type="date" name="END_DATE" id="END_DATE" value="<?php echo $row['END_DATE'] ?>" required>>
     <div class="col-xs-3">
    
        <label for="Card">Card Status</label>
        <Select name="CARD_STATUS" placeholder="Select" name="CARD_STATUS" "id="CARD_STATUS" value="<?php echo $row['CARD_STATUS'] ?>"required>

                <option value=""></option>
                <option value="Assigned">Active</option>
				<option value="Permanant">Expired</option>
                <option value="Returned">Returned</option>
				<option value="Permanant">Permanant</option>
                <option value="Lost & Paid">Lost & Paid</option> </select><br><br><br><br>
          
           </div><br><br>

         <div class="col-sm-offset-2 col-smd-6">
			
        <button style="margin-left: 2px;" type="submit" name="Update" class="btn btn-default"><b>Update</b></button> 
        </div>  
   


          </div>
		  <tr>
		  </table>
      </form>
 </div>
</body>
</html>