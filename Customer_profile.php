<?php
    ob_start();
    session_start();
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

<body onload="bindvtye()">

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
                        <li><a href="Customer_create_pass.php"><i class="zmdi zmdi-dot-circle-alt"></i> Create Pass</a>
                        </li>
                        <li><a href="Customer_search_pass.php"><i class="zmdi zmdi-dot-circle-alt"></i> Search Pass</a>
                        </li>


                    </ul>
                </li>
                <!-- <li>
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
                </li> -->
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
                            <!-- <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li> -->
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="#"><i class="icon-wallet mr-2"></i> Account</li>
                            <!-- <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li> -->
                            <li class="dropdown-divider"></li>
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

                <br><br>
                <div class="container">
                    <div class="row justify-content-left mr-20">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card" style="height: 830px; width: 600px;">

                                <div class="card-body p-4">


                                    <div class="container">
                                        <!-- <centre>
                                            <h3>Profile</h3>
                                        </centre> -->

                                        <div class="row my-2">
                                            <div class="col-lg-8 order-lg-2">
                                                <!-- <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a href="" data-target="#profile" data-toggle="tab"
                                                            class="nav-link active">Profile</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="" data-target="#edit" data-toggle="tab"
                                                            class="nav-link">Edit</a>
                                                    </li> -->
                                                
                                                <!-- <div class="tab-content py-4">
                                                    <div class="tab-pane active" id="profile">
                                                        <h3 class="mb-2" style="font-family:cursive">Profile
                                                            Picture</h3>
                                                        <div class="row"> -->
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

                        <label>
                             <h4 style="font-family:cursive">Edit Profile</h4>
                        </label>
                        <br><br>

                        <!-- <div style="width: 125px;height: 125px; position: relative;border-radius: 50%;">
                                                <img src="../img/" onclick="triggerClick()" id="profileDisplay"  style="display: block;margin: -5px auto;" class="w-100 h-100">
                                                <input type="file" class="form-control" name="faculty_pic" name="profileImage" id="profileImage" onchange="displayImage(this)" accept="image/*" style="display: none;" value="<?php echo $date['STUDENT_PROFILE_PIC'] ?>" required>
                                            </div>
                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-4 col-form-label form-control-label"></label>
                                                                <div class="col-lg-9">
                                                                    <h6 style="font-family:cursive"><input type="Submit"
                                                                            class="btn btn-primary" name="upload"
                                                                            value="upload"></h6>

                                                                </div>
                                                            </div> -->


                                                        </div>
                                                        <!--/row-->
                                                    </div>

                                                    <div class="tab-pane" id="edit">
                                                        <form role="form">
                                                            <!-- </div> -->

                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-6 col-form-label form-control-label">
                                                                    <h6 style="font-family:cursive">First
                                                                        name</h6>
                                                                </label>
                                                                <div class="col-lg-11">
                                                                    <input class="form-control" type="text" name="fname"
                                                                        placeholder="Enter your first name" minlength="3" maxlength="15" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-4 col-form-label form-control-label">
                                                                    <h6 style="font-family:cursive">Last
                                                                        name</h6>
                                                                </label>
                                                                <div class="col-lg-11">
                                                                    <input class="form-control" type="text" name="lname"
                                                                        placeholder="Enter your last name" minlength="3" maxlength="15" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-4 col-form-label form-control-label">
                                                                    <h6 style="font-family:cursive">Email</h6>
                                                                </label>
                                                                <div class="col-lg-11">
                                                                    <input class="form-control" type="email" name="email"
                                                                        placeholder="Enter your email" required>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="form-group row">
                                                                <label
                                                                    class="col-lg-6 col-form-label form-control-label">
                                                                    <h6 style="font-family:cursive">Contact Number</h6>
                                                                </label>
                                                                <div class="col-lg-11">
                                                                    <input class="form-control" type="number" name="phno"
                                                                        Placeholder="Enter Contact number" required>
                                                                </div>
                                                            </div> -->

                                                            <!-- <div class="form-group row">
                                                                <label
                                                                    class="col-lg-10 col-form-label form-control-label">
                                                                    <h6 style="font-family:cursive">Address</h6>
                                                                </label>
                                                                <div class="col-lg-11">
                                                                    <input class="form-control" type="text"
                                                                        placeholder="Enter full address">
                                                                </div>
                                                            </div> -->
                                                           

                                                            

                                                            <!-- <div class="form-group row">
                                                                <label
                                                                    class="col-lg-4 col-form-label form-control-label">
                                                                    <h6 style="font-family:cursive">Password</h6>
                                                                </label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        Placeholder="Enter password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-4 col-form-label form-control-label">
                                                                    <h6 style="font-family:cursive">Confirm
                                                                        password</h6>
                                                                </label>
                                                                <div class="col-lg-9">
                                                                    <input class="form-control" type="password"
                                                                        placeholder="Re-enter your password">
                                                                </div>
                                                            </div> -->
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-lg-4 col-form-label form-control-label"></label>
                                                                <div class="col-lg-9">
                                                                    <h6 style="font-family:cursive"><input type="Submit"
                                                                            class="btn btn-primary" name="sub2"
                                                                            value="SAVE"></h6>
                                                                            <br>
                                                                            <a href="change_password.php"><h4 style="font-family:cursive" class="btn btn-secondary">CHANGE PASSWORD</h4>
                                                                            

                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-4 order-lg-1 text-center"> -->
                                            <!-- <img src="//placehold.it/350"
                                                    class="mx-auto img-fluid img-circle d-block" alt="avatar">
                                                <h6 class="mt-2">Upload a different photo</h6> -->
                                            <!-- <label class="custom-file">
                                                <input type="file" id="file" class="custom-file-input">
                                                <span class="custom-file-control">Choose file</span>
                                            </label>
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-9">
                                                <input type="file" value="Choose File">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>




                            </div>
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
                    <!-- <footer class="footer">
                        <div class="container">
                            <div class="text-center">
                                Copyright © 2020 Desinged by Siddharth Kansara | Bhavik Desai
                            </div>
                        </div>
                    </footer> -->

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

                //     function triggerClick() {
                //     document.querySelector('#profileImage').click();
                // }

                // function displayImage(e) 
                // {
                //     if(e.files[0]){
                //         var reader = new FileReader();

                //         reader.onload = function(e){
                //             document.querySelector('#profileDisplay').setAttribute('src',e.target.result);

                //         }
                //         reader.readAsDataURL(e.files[0]);
                //     }
                // }

                    </script>
                    <!-- Index js -->
                    <script src="assets2/js/index.js"></script>


</body>

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:06:39 GMT -->

</html>

<?php

    $con=mysqli_connect("localhost","root","","start");

                    if(isset($_REQUEST['sub2'])){
                    // if($con){
					// 	echo "con";
					// }else
					// {
					// 	echo "not";
                    // }
                    $data = $_SESSION["cust_data"];
                    $id=$data["login_Referance_id"];

					$name=$_REQUEST['fname'];
					$lname=$_REQUEST['lname'];
					// $gender=$_REQUEST['gender'];
					$email =$_REQUEST['email'];	
					// $password=$_REQUEST['pass'];
					// $repeat_password=$_REQUEST['repass'];
					// $contact=$_REQUEST['phno'];
					// $DOB=$_REQUEST['dob'];
					// $aadhar=$_REQUEST['aadhar'];

				
                    $q="UPDATE `tbl_customer_registration` SET `cust_reg_first_name`='$name',`cust_reg_last_name`='$lname',`cust_reg_email`='$email' WHERE `cust_reg_id`='$id'";
                    $q1="UPDATE `tbl_login` SET `login_email`='$email' WHERE `login_referance_id`='$id'";
                    
                    
                    // print_r($_REQUEST);
                    $res=mysqli_query($con,$q1);
					$res=mysqli_query($con,$q); 

						if($res)
						{
							header('location: final_login.php');
						}
						else
						{
                            echo "error";
                        }
                        
                    ob_flush();

                    }
?>