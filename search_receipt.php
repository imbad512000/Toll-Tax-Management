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
    <title>Employee Home</title>
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
                        <i class="zmdi zmdi-assignment-account"></i> <span>Generate Pass</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="create_pass.php"><i class="zmdi zmdi-open-in-new"></i> Create Pass</a></li>
                        <li><a href="search_pass.php"><i class="zmdi zmdi-search-in-file"></i> Search Pass</a></li>


                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="zmdi zmdi-assignment-o"></i> <span>Generate Receipt</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="create_receipt.php"><i class=" zmdi zmdi-open-in-browser"></i> Create Receipt</a>
                        </li>
                        <li><a href="search_receipt.php"><i class="zmdi zmdi-search-replace"></i> Search Receipt</a></li>


                    </ul>
                </li>
                </li>
                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="zmdi zmdi-collection-text"></i> <span>Online Transaction</span>

                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="zmdi zmdi-balance"></i> <span>Payement Detail</span>
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
                            <!-- <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li> -->
                            <li class="dropdown-item"><a href="Employee_profile.php"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <!-- <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li> -->
                            <li class="dropdown-item"><a href="index.php"><i class="icon-power mr-2"></i> Logout</li></a>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->
        <br><br>
        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <div class="container">
                    <div class="row justify-content">
                        <div class="col-md-8 col-lg-9 col-xl-5">
                            <div class="card" style="height: 650px; width: 1010px;">

                                <div class="card-body p-10">



                                    <h3 class="auth-title">Search Receipt</h3>
                                    <br><br>

                                    <form action="search_receipt.php" method="post">

                                        <div class="form-group mb-3">
                                        <div class="row">
                                                <input class="form-control col-5 ml-2" type="text" id="cid" name="name"
                                                    required="" placeholder="Search Receipt">
                                                <button class="btn btn-danger btn-block col-1 ml-2" type="submit"
                                                    name="sub1"><i class="fa fa-search"></i></button>
                                                    <a href="pass_receipt_pdf_download.php" class="offset-4">
                                                        <button class="btn btn-warning" type="button"
                                                            name="sub1"><i class="fa fa-download"></i> Download</button>
                                                    </a>
                                            </div>
                                            </div>


                                           
                                            <!-- <br><br>
                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-danger btn-block" type="submit" name="sub1">
                                                    Search Receipt </button>
                                            </div> -->

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header"><i class="fa fa-table"></i> Detail
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table id="example" class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Toll Booth Name</th>
                                                                            <th>Toll Booth No.</th>
                                                                            <th>Employee Name</th>
                                                                            <th>Receipt Date</th>
                                                                            <th>Receipt Time</th>
                                                                            <th>Vehicle Type</th>
                                                                            <th>Journey Type</th>
                                                                            <th>Vehicle No.</th>
                                                                            <th>Tax Amount</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <!-- <th><?php //$fname ?></th>
                        <th><?php //$lname ?></th>
                        <th><?php //$Gender?></th>
                        <th><?php //$Email ?></th>
                        <th><?php //$Password ?></th>
                        <th><?php //$PhoneNumber ?></th>
                        <th><?php //$DateOfBirth ?></th>
                        <th><?php //$AadharCardNumber ?></th> -->

                                                                            <?php

                          

                          if(isset($_REQUEST['sub1'])){
                                $id=$_REQUEST['name'];
                                $q1="SELECT * FROM `tbl_toll_receipt_details` WHERE CONCAT(`toll_receipt_id`, `toll_booth_name`, `toll_booth_no`, `toll_emp_name`, `toll_receipt_date`, `toll_receipt_time`, `type_of_vehicle`, `journey_type`, `vehicle_no`, `toll_amount`) LIKE '%".$id."%'";
                                $search_result= filterTable($q1);
                          }
                          else{
                              $q1="SELECT * FROM `tbl_toll_receipt_details`";
                              $search_result= filterTable($q1);
                          }


                          function filterTable($q1){

                            $con=mysqli_connect("localhost","root","","start");  
                            $filter_result=mysqli_query($con,$q1);
                            return $filter_result;

                          }


                            

                            // $q="SELECT * FROM `tbl_toll_receipt_details`";

                            // $res=mysqli_query($con,$q);

                              while($data=mysqli_fetch_array($search_result)){
                                
                                // echo "<tr><td>".$data["toll_receipt_id"]."</td>";
                                echo "<td>".$data["toll_booth_name"]."</td>";
                                echo "<td>".$data["toll_booth_no"]."</td>";
                                echo "<td>".$data["toll_emp_name"]."</td>";
                                echo "<td>".$data["toll_receipt_date"]."</td>";
                                echo "<td>".$data["toll_receipt_time"]."</td>";
                                echo "<td>".$data["type_of_vehicle"]."</td>";
                                echo "<td>".$data["journey_type"]."</td>";
                                echo "<td>".$data["vehicle_no"]."</td>";
                                echo "<td>".$data["toll_amount"]."</td></tr>";

                                

                            }
                        

                            
                            // if($res){
                            //   echo "";
                            // }
                            // else{
                            //   echo "<h2>Error</h2>";
                            // }

                            

                        ?>


                                                                        </tr>
                                                                        </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End Row-->



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
                        <!-- <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 Desinged by Siddharth Kansara | Bhavik Desai
        </div>
      </div>
    </footer> -->
                        <!--End footer-->



                    </div>
                    <!--End wrapper-->

                    <footer class="footer">
                        <div class="container">
                            <div class="text-center">
                                Copyright © 2020 Desinged by Siddharth Kansara | Bhavik Desai
                            </div>
                        </div>
                    </footer>


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