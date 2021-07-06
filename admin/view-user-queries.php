<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:login.php');
  } else{

$vid=$_GET['viewid'];
$isread=1;
$sql="update contact_query info set is_read=:isread where qryID=:vid";
$query=$dbh->prepare($sql);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();

  ?>
<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <title>Shortcut Admin - View Queries</title>
        <link rel="icon" href="../img/favicon1.png">
        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    </head>
    <body>
        
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
           
           <?php include_once('includes/sidebar.php');?>

          <?php include_once('includes/header.php');?>


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">View Queries</h2>

                   

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block block-themed">
                        <div class="block-header block-header-default bg-gd-emerald">
							<button type="button" class="btn btn-success" onclick="goBack()" style="cursor: pointer;">Back</button>
												<script>
												function goBack() {
												window.history.back();
												}
												</script>
							&nbsp; &nbsp;
                            <h3 class="block-title">View Queries</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                          
                           <?php

			$sql="SELECT * from  contact_query where qryID=$vid";
			$query = $dbh -> prepare($sql);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
			if($query->rowCount() > 0)
			{
				foreach($results as $row)
				{               ?>
                                    
 	  <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
	 <tr align="center">
	<td colspan="4" style="font-size:20px;color:blue">
 Query</td></tr>

    <tr>
    <th scope>Name</th>
    <td><?php  echo ($row->qry_name);?> <?php  echo ($row->Contact_Lname);?></td>
    <th scope>Mobile Number</th>
    <td><?php  echo ($row->qry_contactnum);?></td>
  </tr>
  <tr>
    <th scope>Email</th>
    <td><?php  echo ($row->qry_email);?></td>
    <th scope>Subject</th>
    <td><?php  echo ($row->qry_subject);?></td>
  </tr>
  <tr>
  <th >Message</th>
    <td colspan="3"><?php  echo ($row->message);?></td>
  </tr>
 
   
<?php $cnt=$cnt+1;}} ?>
		  <div class='form-group row'>
  											
  											
</table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full Pagination -->

                    <!-- END Dynamic Table Simple -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

           <?php include_once('includes/footer.php');?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>
    </body>
</html>
<?php }  ?>