<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/upvex/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Feb 2020 07:21:13 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Fare Dettail</title>
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
                            <a href="employee_dash.php" class="dropdown-item notify-item">
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
                                  
                                    <span>Fare Detail</span>
                                    
                                </a>
                                
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
            
            <br><br>
            <center>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="col-lg-6">
                                <div class="card-box" >
                                    <h1 class="header-title">Fare Detail</h1>
                                    <p class="sub-header">
                                       
                                    </p>
                                    <br>
                                    <form class="parsley-examples">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label"> Category Id<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="number" required parsley-type="text" class="form-control"
                                                       id="inputtext" placeholder="Category Id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">Vehicle Type<span class="text-danger">*</span></label>
                                            <div class="col-2">
                                                  <select class="selectpicker" data-style="btn-light">
                                                <option>2 Wheeler</option>
                                                <option>4 Wheeler</option>
                                                <option>Bus</option>
                                            </select>

                                            </div>
                                        </div>
                                       
                                         <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label"> Tax Amount<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" required parsley-type="text" class="form-control"
                                                       id="inputtext" placeholder="Tax Amount">
                                            </div>
                                        </div>

                                       
                                        <input type="submit" Value="Add" name="add">
                                        &nbsp;&nbsp;&nbsp;<input type="submit" Value="Update" name="update">
                                        &nbsp;&nbsp;&nbsp;<input type="submit" Value="Delete" name="delete">
                                       
                    </center>
                        <!-- end page title --> 

                       

                <!-- Footer Start -->
                    <!--<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               Coyright © 2020. All rights reserved. Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <!--</footer>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-6"><p>Coyright © 2020. All rights reserved.</p></div>
                            <div class="col-md-6 col-sm-6"><p class="text-right">Designed by <a href="">Siddharth Kansara </a>& <a href="">Bhavik Desai</a></p></div>
                        </div>
                    </div>
                </div>-->
                <!-- end Footer -->

            </div>

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