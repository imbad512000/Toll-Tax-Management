<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/upvex/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Feb 2020 07:21:13 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo.png">

        <!-- plugin css -->
        <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Marcia J. <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0 text-white">
                                    Welcome !
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>View Profile</span>
                            </a>

                      
                          

                          
                            <!-- item-->
                            <a href="index3.php" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                  


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="admin.php" class="logo text-center">
                        <span class="logo-lg" style="background-color:white;">
                            <img src="assets/images/logo.png" alt="" height="45">
                            <!-- <span class="logo-lg-text-light">Upvex</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="28">
                        </span>
                    </a>
                </div>

              

                    <li class="dropdown dropdown-mega d-none d-lg-block">
                       
                        
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">
 
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            
                            <li>
                                <a href="javascript: void(0);">
                                    
                                      
                                  <span>Home</span>                                 
                                </a>
                                
                            </li>

                            <li>
                                <a href="add_employee.php">
                                    
                                  
                                  <span>Add Employee</span>                                     
                                </a>
                                
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                  
                                    
                                    <span>Employee Detail</span>
                                </a>
                                
                            </li>
                                                         <li>
                                <a href="javascript: void(0);">
                                   
                                    <span> Fare Detail </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="add_vehicle_cate.php">Add Vehicle Category</a>
                                    </li>
                                    <li>
                                        <a href="update_vehicle_cate.php">Update Vehicle Category</a>
                                    </li>
                                    <li>
                                        <a href="delete_vehicle_cate.php">Delete Vehicle Category</a>
                                    </li>
                                </ul>
                            </li>

                
                            <li>
                                <a href="javascript: void(0);">
                                    
                                    
                                    <span>Customer Detail</span>
                                </a>
                                
                            </li> 
                             <li>
                                <a href="javascript: void(0);">
                                  
                                    
                                    <span>Online Transactiob</span>
                                </a>
                                
                            </li>
                             <li>
                                <a href="javascript: void(0);">
                                  
                                <span>Entry Detail</span>
                                </a>
                                
                            </li>
                           
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                  
                                    <h2 class="page-title"><center>Welcome Admin</center></h2>
                                </div>
                            </div>
                        </div>     
                        <br><br>
                        <div class = "carousel-inner">
               <div class = "carousel-item active">
                  <img class = "d-block w-100" 
                     src = "assets/images/1.jpeg" 
                     alt = "First slide">
                  <div class = "carousel-caption d-none d-md-block">
                     
                  </div>
               </div>
               
               <div class = "carousel-item">
                  <img class = "d-block w-100" 
                     src = "assets/images/2.jpeg" 
                     alt = "Second slide">
                  <div class = "carousel-caption d-none d-md-block">
                    
                  </div>
               </div>
               
               <div class = "carousel-item">
                  <img class = "d-block w-100" 
                  src = "assets/images/3.jpeg" 
                  alt = "Third slide">
                  <div class = "carousel-caption d-none d-md-block">
                    
                  </div>
               </div>
                        <!-- end page title --> 

                       

                <!-- Footer Start -->
                    <!--<footer class="footer">
                   
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <br><br><br><br><br><br><br><br><br>
                 <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               Coyright © 2020. All rights reserved. Coderthemes</a> 
                            </div>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-sm-6"><p>Coyright © 2020. All rights reserved.</p></div>
                            <div class="col-md-6 col-sm-6"><p class="text-right">Designed by <a href="">Siddharth Kansara </a>& <a href="">Bhavik Desai</a></p></div>
                        </div>
                    </div>
                </div>
                <!-- end Footer -->

            </div>
        </footer>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


  
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
      
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Third Party js-->
        <script src="assets/libs/peity/jquery.peity.min.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/upvex/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Feb 2020 07:21:36 GMT -->
</html>