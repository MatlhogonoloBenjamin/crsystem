<!DOCTYPE html>
<html lang="en"
 
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css1.css">
  <link rel="stylesheet" type="text/css" href="frame.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>  
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>



.container {
  padding: 2px;
  height: 530px;
  width: 87%;
  border: 5px solid #ccc;
  justify-content:center;

  
  }
   .sidebar{
	position: fixed;
	top: 55px;
	left: 0;
	height: 71%;
	width: 200px;
	padding-top: 0px;
	background-color: #6960EC;
	transition: width 0.3s;
}


</style>
</head>

<body>
 <!--sidebar--!>
    <div class="main">
       
 <img src="download.png" style="float:left">		 
 
     </div>
 <div class="sidebar"><br><br>
   <nav class="nav flex-column">
   
   <a class="nav-link" href="index.html">
       <span class="icon">
	     <i class="bi bi-grid"></i>
		 </span>
       <span class="description"><b>Dashboard</b></span>
	</a>
	
	<a class="nav-link" href="fetch.php">
       <span class="icon">
	     <i class="bi bi-search"></i>
		 </span>
       <span class="description"><b>Search</b></span>
	</a>
	
	<a class="nav-link" href="notification.php">
       <span class="icon">
	     <i class="bi bi-bell"></i>
		 </span>
       <span class="description"><b>Notifications</b></span>
	</a>
	
	<a class="nav-link" href="reports.php">
	
	
       <span class="icon">
	     <i class="bi bi-box-seam"></i>
		 </span>
       <span class="description"><b>Reports</b></span>
	</a>
	
	
	<a class="nav-link" href="calendar.php">
       <span class="icon">
	     <i class="bi bi-calendar"></i>
		 </span>
       <span class="description"><b>Calender</b></span>
	</a>
		
   </nav>
 </div>
 
 <main class="main-content">




<br><br>



<form action="" method="POST">
  <div class="container">
    <h2>Company || Host || Expiry Date </h2>
	<a href="index.html"><b>Home<b></a>

   <hr style="height:2px;border-width:0;color:gray;background-color:gray"><br>
   
   <p>Reminder</p><br>


<form action="set_reminder.php" method="POST">
        <label for="title">Company:....</label>
        <input type="text" id="title" name="title" required><br><br>
		
		 <label for="title">Host Names:</label>
        <input type="text" id="title" name="title" required><br><br>
		

        <label for="reminder_date">Reminder:</label>
        <input type="datetime-local" id="reminder_date" name="reminder_date" required><br><br>

        <button type="submit">Set Reminder</button>
    </form>

	
</body>
		
		   
</center>
</body>
</html>


<?php
    $connection = mysqli_connect("localhost","root","","employeedetails");
	if(isset($_POST['Update'])){
		
	 $NAME = $_POST['NAME'];
	 $SURNAME = $_POST['SURNAME'];
	 $COMPANY=$_POST['COMPANY'];
	 $SECURITYNUMBER=$_POST['SECURITYNUMBER'];
	 $PHONENO=$_POST['PHONENO'];
	 $ID_PASSPORT=$_POST['ID_PASSPORT'];
	 $HID_NO=$_POST['HID_NO'];
	 $DATE=$_POST['DATE'];
	 $END_DATE=$_POST['END_DATE'];
	 $CARD_STATUS=$_POST['CARD_STATUS'];
	
	
	$query = "update card_details_table set NAME='$NAME',SURNAME='$SURNAME',COMPANY='$COMPANY',SECURITYNUMBER='$SECURITYNUMBER',PHONENO='$PHONENO',
ID_PASSPORT='$ID_PASSPORT',HID_NO='$HID_NO',DATE='$DATE',END_DATE='$END_DATE',CARD_STATUS='$CARD_STATUS' where SECURITYNUMBER='$SECURITYNUMBER'";
	$query_run = mysqli_query($connection,$query);
	
		 if($query_run)
			 {
				 echo "<script> alert('Data Updated')</script>";
			 }
			     else "<script type='text/javascript'>document.location = 'index.html'</script>";
			 {
				 echo "<script type='text/javascript'>document.location = 'index.html'</script>";
			 }
			 }
	
?>
	
