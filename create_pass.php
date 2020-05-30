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
    <title>Generate Pass</title>
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

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo" style="height: 80px;padding-top: 5px;">
                <a href="Customer.php">
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
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
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
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card" style="height: 1010px; width: 450px;">

                                <div class="card-body p-4">



                                    <center>
                                        <h3 class="auth-title">Create Pass</h3>
                                    </center>
                                    <br><br><br>

                                    <form action="#">

                                        <!-- <div class="form-group mb-3">
                                        <label for="id"> Category Id</label>
                                        <input class="form-control" type="Number" id="cid" name="id" required="" min="0">
                                    </div>  -->

                                        <div class="form-group mb-3">
                                            <label for="password">Pass Holder Name</label>
                                            <input class="form-control" type="text" name="hname" required=""
                                                placeholder="Enter your Holder Name">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Pass Date</label>
                                            <input class="form-control" type="date" name="pdate" required="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Pass Time</label>
                                            <input class="form-control" type="Time" name="ptime">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Type of Journey<span
                                                    class="text-danger"></span></label>
                                            <div class="">
                                                <select class="form-control" name="type_of_vehicle"
                                                    data-style="btn-light">
                                                    <option>Select Journey Type</option>
                                                    <option value="sin">Single</option>
                                                    <option value="ret">Return</option>
                                                    <!-- <option value="B">Bus</option> -->
                                                </select>

                                            </div>
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Vehicle Class<span
                                                    class="text-danger"></span></label>
                                            <div class="">
                                                <select class="form-control" name="type_of_vehicle"
                                                    data-style="btn-light">
                                                    <option>Select Vehical Type</option>
                                                    <option value="2W">2 Wheeler</option>
                                                    <option value="4W">4 Wheeler</option>
                                                    <option value="B">Bus</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Vehicle Number</label>
                                            <input class="form-control" type="text" name="vno" required="" min="0"
                                                max="10" placeholder="Enter your Vehicle Number">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Exipry Date</label>
                                            <input class="form-control" type="date" name="edate" required="">
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="password">Tax Amount</label>
                                            <input class="form-control" type="Number" name="tamount" required=""
                                                min="0">
                                        </div>

                                        <br><br>
                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-danger btn-block" type="submit" name="sub1"> Create
                                                Pass </button>
                                        </div>


                                        <br><br><br><br>
                                        <!-- <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> <span class="text-danger"></span></label>
    <div class="col-3">
    <input type="submit" name="sub1" value="Add" style="background-color:rgba();width: 150px;height: 40px;">

</div>
</div> -->
                                        <br>
                                    </form>
                                    <!--End Row-->






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
                    </script>
                    <!-- Index js -->
                    <script src="assets2/js/index.js"></script>


</body>

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:06:39 GMT -->

</html>
<?php

    if(isset($_REQUEST['sub1'])){

      $con=mysqli_connect("localhost","root","","start");

      // $toll_id=$_REQEST['id'];
      $pass_holder_name=$_REQUEST['hname'];
      $pass_date=$_REQUEST['pdate'];
      $pass_time=$_REQUEST['ptime'];
      $type_of_journey_1=$_REQUEST['type_of_vehicle'];
      $vehicle_class=$_REQUEST['type_of_class'];
      $vehicle_number=$_REQUEST['vno'];
      $exipry_date=$_REQUEST['edate'];
      $Tax_amount=$_REQUEST['tamount'];

      $q="INSERT INTO `tbl_toll_pass_details`(`toll_pass_id`, `toll_pass_holder_name`, `toll_pass_date`, `toll_pass_time`, `toll_pass_type`, `toll_pass_vehicle_class`, `toll_pass_vehicle_no`, `toll_pass_duration`, `toll_pass_amount`) VALUES ('','$pass_holder_name','$pass_date','$pass_time','$type_of_journey_1','$vehicle_class','$vehicle_number','$exipry_date','$Tax_amount')";

      $res=mysqli_query($con,$q);

      if($res){
        header("location: search_pass.php");
      }
      else{
        echo "<script>alert('Error in Query')</script>";
      }


    }
    ob_flush();


?>