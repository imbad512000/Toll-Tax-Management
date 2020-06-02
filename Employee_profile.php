<?php
  ob_start();  
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:04:41 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile Account</title>
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

<body onload="bindvtye()">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo" style="height: 80px;padding-top: 5px;">
                <a href="emp_dash.php">
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
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Generate Pass</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="create_pass.php"><i class="zmdi zmdi-dot-circle-alt"></i> Create Pass</a></li>
                        <li><a href="search_pass.php"><i class="zmdi zmdi-dot-circle-alt"></i> Search Pass</a></li>


                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Generate Receipt</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="create_receipt.php"><i class="zmdi zmdi-dot-circle-alt"></i> Create Receipt</a>
                        </li>
                        <li><a href="search_receipt.php"><i class="zmdi zmdi-dot-circle-alt"></i> Search Receipt</a>
                        </li>


                    </ul>
                </li>
                </li>
                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="zmdi zmdi-lock"></i> <span>Online Transaction</span>

                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="zmdi zmdi-card-travel"></i> <span>Payement Detail</span>
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
                            <span class="user-profile"><img src="assets2/images/avatars/avatar-13.png"
                                    class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="#">
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
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="Employee_profile.php"><i class="icon-wallet mr-2"></i>
                                    Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="main.php"><i class="icon-power mr-2"></i> Logout</li></a>
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
                <br><br>
                <div class="container">
                    <div class="row justify-content-left mr-20">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card" style="height: 700px; width: 700px;">

                                <div class="card-body p-4">


                                    <div class="container">
                                        <centre>
                                            <h3>Profile</h3>
                                        </centre>
                                        <br>
                                        <div class="row my-2">
                                            <div class="col-lg-8 order-lg-2">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a href="" data-target="#profile" data-toggle="tab"
                                                            class="nav-link active">Profile</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="" data-target="#edit" data-toggle="tab"
                                                            class="nav-link">Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content py-4">
                                                    <div class="tab-pane active" id="profile">
                                                        <h5 class="mb-3">User Profile</h5>
                                                        <div class="row">
                                                            <!-- <div class="col-md-6">
                            <h6>About</h6>
                            <p>
                                Web Designer, UI/UX Engineer
                            </p>
                            <h6>Hobbies</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p>
                        </div> -->


                                                        </div>
                                                        <!--/row-->
                                                    </div>

                                                    <div class="tab-pane" id="edit">
                                                        <form role="form">
                                                            <br>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">First
                                                                    name</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        placeholder="Enter your first name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Last
                                                                    name</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text"
                                                                        placeholder="Enter your last name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Email</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="email"
                                                                        placeholder="Enter your email">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Address</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Enter full address">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">State</label>

                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="text" value=""
                                                                        placeholder="Enter State">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">City</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        Placeholder="Enter City">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Password</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        Placeholder="Enter password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label">Confirm
                                                                    password</label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        placeholder="Re-enter your password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-3 col-form-label form-control-label"></label>
                                                                <div class="col-lg-9">
                                                                    <input type="reset" class="btn btn-secondary"
                                                                        name="sub1" value="Cancel">
                                                                    <input type="Submit" class="btn btn-primary"
                                                                        name="sub2" value="SAVE CHANGES">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 order-lg-1 text-center">
                                                <img src="//placehold.it/350"
                                                    class="mx-auto img-fluid img-circle d-block" alt="avatar">
                                                <h6 class="mt-2">Upload a different photo</h6>
                                                <!-- <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Choose file</span>
            </label> -->
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input type="file" value="Choose File">
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
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

                    function bindvtye() {

                        var xmthttp = new XMLHttpRequest();
                        xmthttp.open("GET", "bindvtype.php", false);
                        xmthttp.send(null);
                        document.getElementById("vtype").innerHTML = xmthttp.responseText;
                        // alert(xmthttp.responseText);
                    }
                    </script>
                    <!-- Index js -->
                    <script src="assets2/js/index.js"></script>


</body>

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:06:39 GMT -->

</html>
<?php 

    // if(isset($_REQUEST['sub1'])){

    //   $con=mysqli_connect("localhost","root","","start");

      // $toll_id=$_REQEST['id'];
    //   $pass_holder_name=$_REQUEST['hname'];
    //   $pass_date=$_REQUEST['pdate'];
    //   $pass_time=$_REQUEST['ptime'];
    //   $type_of_journey_1=$_REQUEST['type_of_vehicle_1'];
    //   $vehicle_class=$_REQUEST['type_of_vehicle'];
    //   $vehicle_number=$_REQUEST['vno'];
    //   $exipry_date=$_REQUEST['edate'];
    //   $Tax_amount=$_REQUEST['tamount'];


    //   echo "$type_of_journey_1";  

    //   $q="INSERT INTO `tbl_toll_pass_details`(`toll_pass_id`, `toll_pass_holder_name`, `toll_pass_date`, `toll_pass_time`, `toll_pass_type`, `toll_pass_vehicle_class`, `toll_pass_vehicle_no`, `toll_pass_duration`, `toll_pass_amount`) VALUES ('','$pass_holder_name','$pass_date','$pass_time','$type_of_journey_1','$vehicle_class','$vehicle_number','$exipry_date','$Tax_amount')";

    //   $res=mysqli_query($con,$q);

    //   if($res){
    //     header("location: search_pass.php");
    //   }
    //   else{
    //     echo "<script>alert('Error in Query')</script>";
    //   }


    // }
    // ob_flush();


?>