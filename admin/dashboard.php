<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:login.php');
  }
?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
 <head>
 <link rel="icon" href="../img/favicon1.png">
 	<title>Shortcut - Admin Dashboard</title>
	
 	<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">	 
</head>
	 
    <body>
		
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
         
         <?php include_once('../admin/includes/sidebar.php');?>						

          <?php include_once('../admin/includes/header.php');?>
						
			<!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->                        
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="unread-queries.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-emerald">
                                    <?php 
$sql ="SELECT qryID from contact_query where Is_Read is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalunreadquery=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalunreadquery);?></div>
                                    <p class="mt-5">
                                        <i class="si si-book-open fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Unread Queries</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="read-queries.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-emerald">
                                     <?php 
$sql ="SELECT qryID from contact_query where is_read='1'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalreadquery=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalreadquery);?></div>
                                    <p class="mt-5">
                                        <i class="si si-paper-plane fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Read Queries</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="newsletter.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-emerald">
                                    <?php 
$sql ="SELECT * from newsletter";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalnewbooking=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalnewbooking);?></div>
                                    <p class="mt-5">
                                        <i class="si si-pencil fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Newsletter Subscribers</p>
                                </div>
                            </a>
                        </div> 
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="https://calendar.google.com/calendar/u/4/r/month/2021/7/7?pli=1">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-emerald">                                
                                    <div class="ribbon-box"></div>
                                    <p class="mt-5">
                                        <i class="si si-calendar fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Check Calendar</p>
                                </div>
                            </a>
                        </div>                        
                    
                        <!-- END Row #1 -->
                    </div>
                  
                  
                </div>
                
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
           
        </div>
        <!-- END Page Container -->
			
			<!-- Codebase Core JS -->
        <script src="../admin/assets/js/core/jquery.min.js"></script>
        <script src="../admin/assets/js/core/popper.min.js"></script>
        <script src="../admin/assets/js/core/bootstrap.min.js"></script>
        <script src="../admin/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../admin/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../admin/assets/js/core/jquery.appear.min.js"></script>
        <script src="../admin/assets/js/core/jquery.countTo.min.js"></script>
        <script src="../admin/assets/js/core/js.cookie.min.js"></script>
        <script src="../admin/assets/js/codebase.js"></script>
			<!-- Page JS Plugins -->
        <script src="../admin/assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="../admin/assets/js/pages/be_pages_dashboard.js"></script>
    </body>
</html>