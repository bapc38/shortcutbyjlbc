<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:login.php');
  } else{



  ?>
<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <title>Shortcut Admin - Read Queries</title>
		<link rel="icon" href="../img/favicon1.png">
        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    <style>
          table th {
            width: auto !important;
            }
            
        </style>
    </head>
    <body>
        
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
           
           <?php include_once('includes/sidebar.php');?>

          <?php include_once('includes/header.php');?>


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">&nbsp;</h2>                   

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block block-themed">
                        <div class="block-header bg-gd-emerald">
                            <h3 class="block-title">Read Queries</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="table-responsive">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                          
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        
                                        <th class="d-none d-sm-table-cell">Name</th>
                                        <th class="d-none d-sm-table-cell">Email</th>
                                        <th class="d-none d-sm-table-cell">Contact Number</th>
                                        <th class="d-none d-sm-table-cell">Subject</th>
                                        <th class="d-none d-sm-table-cell">Send Message Date</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                       </tr>
                                </thead>
                                <tbody>
                                    <?php
$sql="SELECT * from contact_query where is_read='1'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    <tr>
                                        <td class="text-center"><?php echo htmlentities($cnt);?></td>
                                        <td class="font-w600"><?php  echo htmlentities($row->qry_name);?></td>						
                                        <td class="font-w600"><?php  echo htmlentities($row->qry_email);?></td>
                                        <td class="font-w600"><?php  echo htmlentities($row->qry_contactnum);?></td>
                                        <td class="font-w600"><?php  echo htmlentities($row->qry_subject);?></td>
                                        <td class="font-w600">
                                            <span class="badge badge-primary"><?php  echo htmlentities($row->date_contacted);?></span>
                                        </td>
                                       
                                         <td class="d-none d-sm-table-cell"><a href="view-user-queries.php?viewid=<?php echo htmlentities ($row->qryID);?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    </tr>
                                   
                                
                                <?php $cnt=$cnt+1;}} ?>  
                                  
                                </tbody>
                                
                            </table>
                        </div>
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