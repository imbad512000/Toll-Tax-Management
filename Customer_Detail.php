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
    <link rel="icon" href="assets2/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="assets2/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
    <!--Data Tables -->
    <link href="assets2/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets2/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
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
                <a href="Admin1.php">
                    <img src="assets3/images/logo.png" class="logo-icon" alt="logo icon" style="width: 30%;">

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
                    <a href="Customer_Detail.php" class="waves-effect">
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
                    
                    <li class="nav-item dropdown-lg">
                        
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-group list-group-flush">
                                
                                
                               
                            </ul>
                        </div>
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
                          
                            <li class="dropdown-item"><a href="Employee_profile.php"><i class="icon-wallet mr-2"></i> Account</li>
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
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <h4 class="page-title">Customer Side</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javaScript:void();"> Register Customer Detail</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customers Detail</li>
                        </ol>
                    </div>
                    <div class="col-sm-3">
                        <div class="btn-group float-sm-right">
                        <a href="Customer_detail_pdf_download.php" class="pull-right">
                                <button class="btn btn-warning" type="button" name="sub1"><i class="fa fa-download"></i> Download</button>                                 
                        </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-table"></i> Detail</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Email Address</th>
                                                <th>Password</th>
                                                <th>Date Of Birth</th>
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
                            $con=mysqli_connect("localhost","root","","start");

                            $q="SELECT * FROM `tbl_customer_registration`";

                            $res=mysqli_query($con,$q);

                              while($data=mysqli_fetch_assoc($res)){
                                
                                echo "<tr><td>".$data["cust_reg_first_name"]."</td>";
                                echo "<td>".$data["cust_reg_last_name"]."</td>";
                                echo "<td>".$data["cust_reg_gender"]."</td>";
                                echo "<td>".$data["cust_reg_email"]."</td>";
                                echo "<td>".$data["cust_reg_password"]."</td>";
                                // echo "<td>".$data["emp_reg_contact_num"]."</td>";
                                echo "<td>".$data["cust_reg_DOB"]."</td></tr>";
                                // echo "<td>".$data["emp_aadharcard_number"]."</td></tr>";

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
        <br><br><br><br><br><br><br><br><br><br><br><br>
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

    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/js/popper.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets2/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets2/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets2/js/app-script.js"></script>

    <!--Data Tables js-->
    <script src="assets2/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/jszip.min.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
    <script src="assets2/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
    $(document).ready(function() {
        //Default data table
        $('#default-datatable').DataTable();


        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');

    });
    </script>



</body>

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:06:39 GMT -->

</html>