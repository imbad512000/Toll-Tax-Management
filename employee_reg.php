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
    <title>Fare Detail</title>
    <!-- loader-->
    <link href="assets2/css/pace.min.css" rel="stylesheet" />
    <script src="assets2/js/pace.min.js"></script>
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
            <div class="brand-logo">
                <a href="Admin1.php">
                    <img src="assets3/images/logo.png" class="logo-icon" alt="logo icon" style="width: 80%;">

                </a>
            </div>

            <ul class="sidebar-menu">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="Admin1.php" class="waves-effect">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
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
                    <a href="#" class="waves-effect">
                        <i class="zmdi zmdi-card-travel"></i> <span>Customer Detail</span>
                    </a>
                </li>
                <li>
                    <a href="Entry_trial.php" class="waves-effect">
                        <i class="zmdi zmdi-invert-colors"></i> <span>Entry Detail</span>

                    </a>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav id="header-setting" class="navbar navbar-expand fixed-top">
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
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i><span
                                class="badge badge-primary badge-up">12</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    You have 12 new messages
                                    <span class="badge badge-primary">12</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="assets2/images/avatars/avatar-5.png" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Jhon Deo</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                <small>Today, 4:10 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="assets2/images/avatars/avatar-6.png" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Sara Jen</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                <small>Yesterday, 8:30 AM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="assets2/images/avatars/avatar-7.png" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Dannish Josh</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                <small>5/11/2018, 2:50 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="assets2/images/avatars/avatar-8.png" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet.</p>
                                                <small>1/11/2018, 2:50 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item text-center"><a href="javaScript:void();">See All
                                        Messages</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    You have 14 Notifications
                                    <span class="badge badge-info">14</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Registered Users</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Received Orders</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Updates</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item text-center"><a href="javaScript:void();">See All
                                        Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
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

                <form action="#">
                    <div class="page-body">
                        <!-- <div class="row">
<div class="col-sm-12">
 -->
                        <!-- <div class="account-pages mt-5 mb-5">/
 -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-7">
                                    <div class="card" style="height: 780px;">

                                        <div class="card-body p-4">




                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="container m-3 card text-light bg-transparent m-auto+"
                                                    style="font-weight: 650;">
                                                    <div class="card-header text-center font-weight-bold"
                                                        style="font-size: 2em">
                                                        Employee Registration
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label class="col-3" for="fname">First Name</label>
                                                            <input type="text" name="fname"
                                                                placeholder="Enter First Name"
                                                                class="form-control col-7  " required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3" for="lname">Last Name</label>
                                                            <input type="text" name="lname"
                                                                placeholder="Enter Last Name" class="form-control col-7"
                                                                required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3">Gender</label>
                                                            <input type="radio" name="gender" value="Male" class="mt-1">
                                                            <label class="col-3" for="male">Male</label>
                                                            <input type="radio" name="gender" value="Female"
                                                                class="mt-1">
                                                            <label class="col-3" for="female">Female</label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3" for="email">Email</label>
                                                            <input type="email" name="email" placeholder="Enter Email"
                                                                class="form-control col-7" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3" for="pass">Password</label>
                                                            <input type="password" name="password"
                                                                placeholder="Enter Password" class="form-control col-7"
                                                                required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3" for="repass">Re-type Password</label>
                                                            <input type="password" name="repass"
                                                                placeholder="Enter Re-type Password"
                                                                class="form-control col-7" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3" for="phno">Phone Number</label>
                                                            <input type="tel" name="phno"
                                                                placeholder="Enter Phone Number"
                                                                class="form-control col-7" pattern="[0-9]{10}" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3" for="dob">Date of Birth</label>
                                                            <input type="date" name="dob"
                                                                placeholder="Enter Date of Birth"
                                                                class="form-control col-7">
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3" for="dob">Employee Aadhar-Card
                                                                Number</label>
                                                            <input type="tel" name="aadhar"
                                                                placeholder="Enter Aadhar-card Number"
                                                                class="form-control col-7" pattern="[0-9]{12}">
                                                        </div>
                                                        <div class="form-group row">
                                                            <input type="submit" name="dob2" value="Register"
                                                                class="btn btn-light offset-4 col-4 font-weight-bold">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>


                                            <br><br><br><br>


                                            <?php
     if(isset($_REQUEST['dob2']))
                {

                    $con = mysqli_connect("localhost","root","","start");
                    // if($con){
                    //  echo "con";
                    // }else
                    // {
                    //  echo "not";
                    // }
                    $name=$_REQUEST['fname'];
                    $lname=$_REQUEST['lname'];
                    $gender=$_REQUEST['gender'];
                    $email = $_REQUEST['email'];    
                    $password=$_REQUEST['password'];
                    $repeat_password=$_REQUEST['repass'];
                    $contact=$_REQUEST['phno'];
                    $DOB=$_REQUEST['dob'];
                    $aadhar=$_REQUEST['aadhar'];

                
                    $sq =  "SELECT `emp_reg_email` FROM `tbl_employee_registration` WHERE `emp_reg_email` = '$email'";

                    $value = mysqli_query($con,$sq);
                    $demail = mysqli_fetch_assoc($value);   

                                //echo $demail['cust_reg_email'];
                                $uemail = $demail['emp_reg_email'];                    
                    

                             if($uemail==$email){
                                        echo "<center><h4>User exist already</h4></center>";
                                }
                                else{
                                        //echo "User not exist";
                                        $q = "INSERT INTO `tbl_employee_registration`(`emp_reg_id`, `emp_reg_first_name`, `emp_reg_last_name`, `emp_reg_gender`, `emp_reg_email`, `emp_reg_password`, `emp_reg_contact_num`, `emp_reg_DOB`, `emp_aadharcard_number`) VALUES ('','$name','$lname','$gender','$email','$password','$contact','$DOB','$aadhar')";

                                        $res = mysqli_query($con,$q); 

                                        if($res) 
                                        {
                                            header('location: final_login.php');
                                        }
                                        else
                                        {
                                            echo "Error ";
                                        }

                    
    
                }}
    ?>
                                            <!-- <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> <span class="text-danger"></span></label>
    <div class="col-3">
    <input type="submit" name="sub1" value="Add" style="background-color:rgba();width: 150px;height: 40px;">

</div>
</div> -->
                                            <br>
                                            <br><br>






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
                                <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i>
                                </a>
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