<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CardsReconciliationSystem</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css1.css">
  

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 20px auto;
            
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
tr {

    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow:hidden;
    background-color: white;
    position: top;
	font-size: 18px;
}

   
    </style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

				
                <div class="sidebar-brand-text mx-1"> <img src="download.png" style="float:left"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Discover</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Search:</h6>
                        <a class="collapse-item" href="fetch.php">Search</a>
                        <a class="collapse-item" href="">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
          

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main-menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Account:</h6>
                        <a class="collapse-item" href="search.php">Login</a>
                        <a class="collapse-item" href="search.php">Register</a>
                        <a class="collapse-item" href="">Forgot Password</a>
                        <div class="collapse-divider"></div>
                      
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="reports.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reports</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message 
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>-->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                   

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                 
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                                       <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-20 col-lg-15">
						
						
<form action="" method="POST">
  <div class="container">
    <center><h2>Search Employee And Update Data</h2></h2></center>
   <center> <a href="logout.php"><b>Logout</b></a></center>
		<center><a href="reports.php"><b>Reports</b></center></a>

<hr style="height:0px;border-width:0%;color:gray;background-color:white">                 


<br><br>
       


        <table>
            <tr>
                <th colspan="2">Customer Information</th>
            </tr>
            <tr>
                  
            <td><label for="Name"><b>Name</b></label></td>
            <td> <input type="text" placeholder="Name" name="NAME" id="NAME"></td>

      
             <td><label for="Surname"><b>Surname:</b></label></td>
             <td><input type="text" placeholder="Surname" name="SURNAME" id="SURNAME"></td>

             <td><label for="name"><b>Company:</b></label></td>
             <td><input type="text" placeholder="Company" name="COMPANY" id="COMPANY"></td>

               </tr>
                 
               <tr>
              <td><label for="name"><b>Security Number:</b></label></td>
              <td><input type="text" placeholder="Security Number" name="SECURITYNUMBER" id="SECURITYNUMBER"></td>
  


                <td><label for="Phone"><b>Phone:</b></label></td> 
                <td> <input type="number" placeholder="Phone Number" name="PHONENO" id="PHONENO"></td>
         
                <td><label for="Id/Passport"><b>ID/Passport:</b></label></td>
                <td><input type="text" placeholder="ID/Passport" name="ID_PASSPORT" id="ID_PASSPORT"></td>

                 </tr>
               
                 <tr>
                <td><label for="HID"><b>HID:</label></td>
                <td><input type="number" placeholder="HID Number" name="HID_NO" id="HID_NO"></td>


                <td><label for="Date"><b>Start</b></label></td>
                <td><input type="date" name="DATE" id="DATE"></td>

                 <td><label for="Date"><b>End Date</b></label></td> 
                <td><input type="date" name="END_DATE" id="END_DATE"></td>
      
                <tr>
         
                <td><label for="Card"><b>Status</b></label></td>
                <td><Select name="CARD_STATUS" placeholder="Select" name="CARD_STATUS" "id="CARD_STATUS">
                         

                                         <option></option>
                <option value="Active">Active</option>
				<option value="Expired">Expired</option>
                <option value="Returned">Returned</option>
				<option value="Permanant">Permanant</option>
				<option value="Damaged & Paid">Damaged & Paid</option>
				<option value="Faulty & Replaced"> Faulty & Replaced</option>
	                        <option value="Lost & Paid">Lost & Paid</option> </select>

 
		
                 </td>


            </tr>
 



</table>


</div>
</div>

	<table>					


              <tr>
  <th><div class="d-flex justify-content-between mt-3">
  <button type="submit" class="btn btn-primary me-2">Submit</button>
  <button type="search"  name="Search" value="Search Data" class="btn btn-secondary">Search</button></th>
</div>
            </tr>
 
</form>
    
 
   
<table style="width:0%">

 <table class="table table-bordered ">
    <thead bgcolor="blue">
	<tr class="bg-dark text-black" style="width:10%">
	<th>NAME</th>
	<th>SURNAME</th>
	<th>COMPANY</th>
    <th>SECURITYNUMBER</th>
    <th>PHONENO</th>
    <th>ID_PASSPORT</th>
    <th>HID_NO</th>	
	<th>DATE</th>
	<th>END_DATE</th>
	<th>CARD_STATUS</th>
	<th>ACTION</th>
	
	</tr>
	</thead>
<tbody>

   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedetails";

// Create connection
$connection = mysqli_connect("localhost", "root","", "employeedetails");


if (isset($_POST['Search'])) 
    {
    $NAME = $_POST['NAME'];
	$SURNAME = $_POST['SURNAME'];
	$COMPANY = $_POST['COMPANY'];
    $SECURITYNUMBER = $_POST['SECURITYNUMBER'];
	$PHONENO = $_POST['PHONENO'];
	$ID_PASSPORT = $_POST['ID_PASSPORT'];
	$HID_NO = $_POST['HID_NO'];
	$DATE= $_POST['DATE'];
	$END_DATE = $_POST['END_DATE'];
	$CARD_STATUS = $_POST['CARD_STATUS'];

     if($NAME !="" || $SURNAME !="" || $COMPANY !="" || $SECURITYNUMBER !="" || $PHONENO !="" || $ID_PASSPORT !="" || $HID_NO !="" || $DATE !="" || $END_DATE !="" || $CARD_STATUS !="")
	 
	
	  $query = "SELECT * FROM card_details_table where NAME='$NAME' OR SURNAME='$SURNAME' OR COMPANY='$COMPANY' OR SECURITYNUMBER='$SECURITYNUMBER' OR PHONENO='$PHONENO' OR ID_PASSPORT='$ID_PASSPORT' OR HID_NO='$HID_NO' OR DATE='$DATE' OR END_DATE='$END_DATE' AND CARD_STATUS='$CARD_STATUS'";
	
	$query_run = mysqli_query($connection,$query);
	
	while($row = mysqli_fetch_array($query_run))
	{
		?>
		<tr>
		<td> <input type="text"  name="NAME" id="NAME" size="9" value="<?php echo $row['NAME'] ?>" required></td>
		<td> <input type="text"  name="SURNAME" id="SURNAME" size="9" value="<?php echo $row['SURNAME'] ?>" required></td>
		<td> <input type="text"  name="COMPANY" id="COMPANY" size="8" value="<?php echo $row['COMPANY'] ?>" required></td>
		<td> <input type="text"  name="SECURITYNUMBER" id="SECURITYNUMBER"size="10" value="<?php echo $row['SECURITYNUMBER'] ?>" required></td>
		<td> <input type="text"  name="PHONENO" id="PHONENO" size="5" value="<?php echo $row['PHONENO'] ?>" required></td>
		<td> <input type="text"  name="ID_PASSPORT" id="ID_PASSPORT" size="7" value="<?php echo $row['ID_PASSPORT'] ?>" required></td>
		<td> <input type="text"  name="HID_NO" id="HID_NO"size="3" value="<?php echo $row['HID_NO'] ?>" required></td>
		<td> <input type="text"  name="DATE" id="DATE" size="6" value="<?php echo $row['DATE'] ?>" required></td>
		<td> <input type="text"  name="END_DATE" id="END_DATE" size="6" value="<?php echo $row['END_DATE'] ?>" required></td>
		<td> <input type="text"  name="CARD_STATUS" id="CARD_STATUS" size="8" value="<?php echo $row['CARD_STATUS'] ?>" required></td>
		<td><button style="margin-left: 2px;" type="submit" name="Update" class="btn btn-success nav-link active"><b>Update</b></button</td>
	
		
		
		
		</tr>	
	<?php
	}	
    }	
		
     ?>
	 </tbody>
	 </table>
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
	
