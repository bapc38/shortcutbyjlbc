  <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:login.php');
  } else{
  ?> 
<!-- <link rel="stylesheet" id="css-main" href="/admin/assets/css/codebase.min.css"> -->
<link rel="stylesheet" id="css-main" href="../assets/scss/main.scss">
<?php include('includes/dbconnection.php'); ?>

   <nav id="sidebar">	   
	   <div style="padding-top: 20px">	   
	   </div>
	            <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow " >
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->              
								<div class="content-header-item">
                                    <a class="link-effect font-w700" href="../admin/dashboard.php">                 
                                        <span class="font-size-l text-dual-primary-dark">Shortcut</span><span class="font-size-l text-primary"> Admin</span>
                                    </a>
								</div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
						<div style="padding-top: 20px">	   
	   					</div>
                        <!-- END Side Header -->
						
						
                        <!-- Side User -->                                                    
							<!-- Visible only in mini mode --> 							
							 <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn" href="dashboard.php">
                                <img class="img-avatar img-avatar32" src="Shortcut Logo.png" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="dashboard.php">
                                    <img class="img-avatar" src="Shortcut Logo.png" alt="">
                                </a>							   							
							
                                <ul class="list-inline mt-10">									                                 									
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="admin-profile.php" > Hello, Admin!</a>				
                                    </li>                                     
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark" href="logout.php">
                                            <i class="si si-logout"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li class="open">
                                    <a href="dashboard.php"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboards</span></a>                                   
                                </li>
                              
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden"></span></li>                                
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">Contact Us Queries</span></a>
                                    <ul>
                                        <li>
                                            <a href="unread-queries.php">Unread Queries</a>
                                        </li>
                                        <li>
                                            <a href="read-queries.php">Read Queries</a>
                                        </li>                                      
                                    </ul>
                                </li>                                                               
								<li>
                                    <a  href="newsletter.php"><i class="fa fa-star-o"></i><span class="sidebar-mini-hide">Newsletter Subscribers</span></a>                                 
                                </li>       
                                <li>
                                    <a  href="https://calendar.google.com/calendar/u/4/r/month/2021/7/7?pli=1"><i class="fa fa-calendar"></i><span class="sidebar-mini-hide">Check Calendar</span></a>                                 
                                </li>                          								                     
                            
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <?php }  ?> 