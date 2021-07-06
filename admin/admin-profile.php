<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:login.php');
  } else{
    if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['odmsaid'];
    $AFName=$_POST['adminFname'];
	$ALName=$_POST['adminLname'];
  $mobno=$_POST['mobilenumber'];
  $email=$_POST['email'];
  $sql="update admin_account set Admin_FName=:adminFname, Admin_LName=:adminLname, Admin_Mobile=:mobilenumber, Admin_Email=:email where Admin_ID=:aid";
     $query = $dbh->prepare($sql);
     $query->bindParam(':adminFname',$AFName,PDO::PARAM_STR);
	 $query->bindParam(':adminLname',$ALName,PDO::PARAM_STR);
     $query->bindParam(':email',$email,PDO::PARAM_STR);
     $query->bindParam(':mobilenumber',$mobno,PDO::PARAM_STR);
     $query->bindParam(':aid',$adminid,PDO::PARAM_STR);
$query->execute();

        echo '<script>alert("Profile has been updated")</script>';
		echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
  }
  ?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
    <title>Shortcut Admin - Admin Profile</title>
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    <link rel="icon" href="../img/favicon1.png">
</head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
     

             <?php include_once('includes/sidebar.php');?>

          <?php include_once('includes/header.php');?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    <!-- Register Forms -->
                    <h2 class="content-heading">Admin Profile</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Admin Profile</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <?php

$sql="SELECT * from  admin_account";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    <form method="post">
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-username">Admin First Name:</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="adminFname" value="<?php  echo $row->Admin_FName;?>" required='true'>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-12" for="register1-username">Admin Last Name:</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="adminLname" value="<?php  echo $row->Admin_LName;?>" required='true'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">User Name:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="username" value="<?php  echo $row->Admin_Username;?>" readonly="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Email:</label>
                                            <div class="col-12">
                                                <input type="email" class="form-control" name="email" value="<?php  echo $row->Admin_Email;?>" required='true'>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12" for="register1-password">Contact Number:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="mobilenumber" value="<?php  echo $row->Admin_Mobile;?>" required='true' maxlength='11'>
                                            </div>
                                        </div>
                                        
                                      <?php $cnt=$cnt+1;}} ?>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-success" name="submit">
                                                    <i class="fa fa-plus mr-5"></i> Update
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
                        </div>
                        
                       </div>
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
    </body>
</html>
<?php }  ?>