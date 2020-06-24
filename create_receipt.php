<?php
  ob_start();  
  session_start(); 
  $con=mysqli_connect("localhost","root","","start");

  $data = $_SESSION["Emp_data"];
//   print_r($_SESSION["Emp_data"]);
$lid = $data["login_Referance_id"];
// echo "$lid";
//   $empname=$data['emp_reg_first_name']." ".$data['emp_reg_last_name'];
?>
<?php

    $q2="SELECT * FROM `tbl_employee_registration` WHERE `emp_reg_id`='$lid'";
    $empdata=mysqli_query($con,$q2);
    $data1 = mysqli_fetch_assoc($empdata);

    // print_r($data1);

    $empname=$data1['emp_reg_first_name']." ".$data1['emp_reg_last_name'];

  

?>

<?php
    $q1="SELECT `toll_booth_id`, `toll_booth_number` FROM `tbl_toll_booth_no`";

   
    $res=mysqli_query($con,$q1);

    // if($res){
    //     echo"<script>alert('added toll booth successfully')</script>";
    // }
    // else{
    //     echo"not";
    // }

    date_default_timezone_set("Asia/Kolkata");
    $datefun= date("Y-m-d");
    $timefun= date("h:i");

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- this meta viewport is required for BOLT //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<!-- BOLT Sandbox/test //-->
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
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
        <!-- <header class="topbar-nav">
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
                            
                            <li class="dropdown-item"><a href="Employee_profile.php"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            
                            <li class="dropdown-item"><a href="index.php"><i class="icon-power mr-2"></i> Logout</li></a>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header> -->
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <br><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card" style="height: 1150px; width: 450px;">

                                <div class="card-body p-4">



                                    <center>
                                        <h3 class="auth-title">Create Reciept</h3>
                                    </center>
                                    <br><br><br>

                                    <form action="#" method="post">

                                        <div class="form-group mb-3">
                                            <label for="password">Toll booth name</label>
                                            <input class="form-control"  type="text" name="tbname" required=""
                                                placeholder="Enter your Holder Name" minlength="3" maxlength="15">
                                        </div>

                                        <!-- <div class="form-group mb-3">
                                            <label for="password">Email-Address</label>
                                            <input class="form-control" id="email" type="email" name="email" required
                                                placeholder="Enter your email address" value="">
                                        </div> -->

                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Toll Booth no<span
                                                    class="text-danger"></span></label>
                                            <div class="">
                                                <select class="form-control" name="booth"
                                                    data-style="btn-light">
                                                    <?php  while($row=mysqli_fetch_assoc($res)){ ?>
                                                          <option value="<?php echo $row["toll_booth_id"]; ?>"> <?php echo $row["toll_booth_number"];  ?> </option> 
                                                    <?php }?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Toll Employee Name</label>
                                            <input class="form-control" type="text" name="empname" required="" value="<?php echo $empname; ?>"
                                                placeholder="Enter your Holder Name" minlength="3" maxlength="15">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Toll Receipt Date</label>
                                            <input class="form-control" type="date" value="<?php echo $datefun;?>" min="2020-01-01" max="2020-12-31">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Toll Receipt Time</label>
                                            <input class="form-control" type="text" value="<?php echo $timefun;?>" name="ptime">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Vehicle
                                                Type<span class="text-danger"></span></label>
                                            <div id="vtype">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Type of Journey<span
                                                    class="text-danger"></span></label>
                                            <div class="">
                                                <select class="form-control" name="type_of_journey"
                                                    data-style="btn-light">
                                                    <!-- <option>Select Journey Type</option> -->
                                                    <option value="Single">Single</option>
                                                    <option value="Return">Return</option>
                                                    <!-- <option value="B">Bus</option> -->
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Contact Number</label>
                                            <input class="form-control" id="mobile" type="tel" name="mobile" required="" maxlength="10" placeholder="Enter your Contact Number">
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="password">Vehicle Number</label>
                                            <input class="form-control" id="pinfo" type="text" name="vno" required="" 
                                                 placeholder="Enter your Vehicle Number" pattern="^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{4}$">
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="password">Tax Amount</label>
                                            <input class="form-control" type="Number" name="tamount" required=""
                                                min="0">
                                        </div>

                                        <!-- <input type="hidden" id="hash" name="hash" placeholder="Hash" value="" /> -->
                                        <br><br>
                                        <div class="form-group mb-0 text-center">
                                        <div><input type="submit" class="btn btn-success btn-block" value="Pay" name="sub1" /></div>
                                        </div>

                                        <br><br><br><br>
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

    if(isset($_REQUEST['sub1'])){
 

      // $toll_id=$_REQEST['id'];
      $toll_booth=$_REQUEST['tbname'];
      $toll_booth_no_1=$_REQUEST['booth'];
      $toll_emp_name_1=$_REQUEST['empname'];
      $receipt_date=$_REQUEST['pdate'];
      $toll_receipt_time=$_REQUEST['ptime'];
      $vehcile_category=$_REQUEST['type_of_vehicle'];
      $type_journey=$_REQUEST['type_of_journey'];
      $Vehicle_no=$_REQUEST['vno'];
      $Tax_amount=$_REQUEST['tamount'];
 

    //   print_r($_REQUEST);


    $result1 = mysqli_query($con,"INSERT INTO `tbl_toll_receipt_details` VALUES ('','$toll_booth','$toll_booth_no_1','$toll_emp_name_1','$receipt_date','$toll_receipt_time','$vehcile_category','$type_journey','$Vehicle_no','$Tax_amount')") ;

     
     
    // if (!mysqli_query($con,"INSERT INTO `tbl_toll_receipt_details`(`toll_receipt_id`,`toll_booth_name`, `toll_booth_no`, `toll_emp_name`, `toll_receipt_date`, `toll_receipt_time`, `type_of_vehicle`, `journey_type`,`vehicle_no`, `toll_amount`) VALUES ('','$toll_booth','$toll_booth_no_1','$toll_emp_name_1','$receipt_date','$receipt_time','$vehcile_category','$type_journey','$Vehicle_no','$Tax_amount')"))
    // {
    // echo("Errorcode: " . mysqli_errno($con));
    // }

      if($result1){
        header("location: search_receipt.php");
      }
      else{
        echo "<script>alert('Error in Query')</script>";
      }


    }


?>