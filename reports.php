
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
						
						
<center>
<form action="" method="POST">
  <div class="container">
    <h2>Daily || Weekly || Monthly  </h2>
	<a href="index.html"><b>Home<b></a>

   <hr style="height:2px;border-width:0;color:gray;background-color:gray"><br>
   
   <p>Download Reports</p><br>

		<form action="dailydownload.php" method="POST">
        <label for="date"><b>Select Date:</b></label>
        <input type="date" id="date" name="date" required>
        <button type="submit"class="btn btn-info nav-link active"><b>Daily Report</b></button>
    </form>
	  <form action="weeklydownload.php" method="post">
        <button type="submit"class="btn btn-info nav-link active"><b>Weekly Report</b></button>
    </form>
	<body>
    <form action="monthlydownload.php" method="post">
        <button type="submit"class="btn btn-info nav-link active"><b>Monthly Report</b></button>
    </form>
	
	<table style="width:100%">
	<tr style="height:10px">
	   <td> <form action="expiredcards.php" method="post">
        <button type="submit"><b>Expired Cards</b></button>
		
      </form></td>
	
	<td> <form action="returnedcards.php" method="post">
        <button type="submit"><b>Returned Cards</b></button>
		
	</form></td>
	
	 <td><form action="activecards.php" method="post">
        <button type="submit"><b>Active cards</b></button>
	</form></td>
    
	
	 <td><form action="permanantcards.php" method="post">
        <button type="submit"><b>Permanant Cards</b></button>
		
	</form></td>
    
	
	<td> <form action="damagedpaid.php" method="post">
        <button type="submit"><b>Damaged & Paid</b></button>
	</form></td>
  
	 
	<td><form action="faultyreplaced.php" method="post">
        <button type="submit"><b>Faulty & Replaced</b></button>
   </form></td>
	
	 <td><form action="lostpaid.php" method="post">
        <button type="submit"><b>Lost & Paid</b></button>
    </form></td>
	
	</tr>
	</table>
</body>
		
		   
</center>

    
 
   


</div>





 
	 <br>			
						
     <hr style="height:0px;border-width:0%;color:gray;background-color:white">                 



              
                           



                 

                            <!-- Color System -->
                           
                            <!-- Illustrations -->
                           
                            <!-- Approach -->
                          

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
                        </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="search.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

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
	