<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:04:41 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Home</title>
    <!-- loader-->
    <link href="assets22/css/pace.min.css" rel="stylesheet" />
    <script src="assets22/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="assets3/images/logo.png" type="logo-icon" />
    <!-- Vector CSS -->
    <link href="assets2/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="assets2/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets2/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets2/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets2/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets2/css/app-style.css" rel="stylesheet" />
    <!-- skins CSS-->
    <link href="assets2/css/skins.html" rel="stylesheet" />

</head>


<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo" style="height: 80px;padding-top: 5px;">

            <a href="Admin1.php">
                <img src="assets3/images/logo.png" class="logo-icon" alt="logo icon" style="width: 30%;">
                <!-- <h5 class="logo-text"> Admin</h5> -->
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>

            </li>
            </li>
            <li>
                <a href="employee_reg.php" class="waves-effect">
                    <i class="zmdi zmdi-layers"></i>
                    <span>Add Employment</span>
                </a>
            </li>
            <li>
                <a href="employee_detail.php" class="waves-effect">
                    <i class="zmdi zmdi-card-travel"></i>
                    <span>Employee Detail</span>

                </a>
            </li>

            <li>
                <a href="Search_employee.php" class="waves-effect">
                    <i class="zmdi zmdi-layers"></i>
                    <span>Search Employee</span>
                </a>
            </li>


            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Fare detail</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="fare_add.php"><i class="zmdi zmdi-dot-circle-alt"></i> Add Vehicle Category</a>
                    </li>
                    <li><a href="fare_update.php"><i class="zmdi zmdi-dot-circle-alt"></i> Update Vehicle
                            Category</a></li>
                    <li><a href="fare_delete.php"><i class="zmdi zmdi-dot-circle-alt"></i> Delete Vehicle
                            Category</a></li>

                </ul>
            </li>
            </li>
            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="zmdi zmdi-lock"></i> <span>Online Transaction</span>

                </a>
            </li>
            <li>
                <a href="Customer_detail.php" class="waves-effect">
                    <i class="zmdi zmdi-card-travel"></i> <span>Customer Detail</span>
                </a>
            </li>

            <li>
                <a href="Search_customer.php" class="waves-effect">
                    <i class="zmdi zmdi-card-travel"></i> <span>Search Customer</span>
                </a>
            </li>

            <li>
                <a href="Entry_trial.php" class="waves-effect">
                    <i class="zmdi zmdi-invert-colors"></i> <span>Entry Detail</span>

                </a>
            </li>

            <li>
                <a href="toll_booth_entry.php" class="waves-effect">
                    <i class="zmdi zmdi-card-travel"></i> <span>New booth Entry</span>
                </a>
            </li>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav id="header-setting" class="navbar navbar-expand fixed-top" style="height: 80px;">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="Enter keywords">

                        <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="assets2/images/avatars/avatar-13.png" class="img-circle"
                                alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3"
                                            src="assets2/images/avatars/avatar-13.png" alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                        <p class="user-subtitle">mccoy@example.com</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li> -->
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><a href="index.php"><i class="icon-power mr-2"></i> Logout</li></a>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

            <img src="images/admin.jpg" style="width: 1800px;height:625px; "
                                    class="img-fluid"></a>
        <!--End Row-->


        <!--End Row-->


        <!--End Dashboard Content-->
        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->
    </div>
    <!-- End container-fluid-->

</div>
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--Start footer-->
<footer class="footer">
    <div class="container">
        <div class="text-center">
            Copyright © 2020 Desinged by Siddharth Kansara | Bhavik Desai
        </div>
    </div>
</footer>
<!--End footer-->



</div>
<!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="assets2/js/jquery.min.js"></script>
<script src="assets2/js/popper.min.js"></script>
<script src="assets2/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="assets2/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="assets2/js/sidebar-menu.js"></script>
<!-- loader scripts -->
<script src="assets2/js/jquery.loading-indicator.html"></script>
<!-- Custom scripts -->
<script src="assets2/js/app-script.js"></script>
<!-- Chart js -->

<script src="assets2/plugins/Chart.js/Chart.min.js"></script>
<!-- Vector map JavaScript -->
<script src="assets2/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets2/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Easy Pie Chart JS -->
<script src="assets2/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<!-- Sparkline JS -->
<script src="assets2/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="assets2/plugins/jquery-knob/excanvas.js"></script>
<script src="assets2/plugins/jquery-knob/jquery.knob.js"></script>

<script>
$(function() {
    $(".knob").knob();
});
</script>
<!-- Index js -->
<script src="assets2/js/index.js"></script>


</body>

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:06:39 GMT -->

</html>

<?php
    $con=mysqli_connect("localhost","root","","start");
    
?>