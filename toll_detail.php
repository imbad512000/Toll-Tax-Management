<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:04:41 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Toll Detail</title>
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




                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="zmdi zmdi-assignment-account"></i> <span>Generate Pass</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="Customer_create_pass.php"><i class="zmdi zmdi-open-in-new"></i> Create Pass</a></li>
                        <li><a href="Customer_search_pass.php"><i class="zmdi zmdi-search-in-file"></i> Search Pass</a></li>


                    </ul>
                </li>
                <!-- <li>
        <a href="receiptc.php" class="waves-effect">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Generate Receipt</span>
         </a>bhavik Desai
         </li> -->
                </li>
                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="zmdi zmdi-lock"></i> <span>Online Transaction</span>

                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Toll Detail</span>
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
                <br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-12">
                            <div class="card" style="height: 1010px; width: 1080px;">

                                <div class="card-body p-4">



                                   

                                    

                                        <!-- <div class="form-group mb-3">
                                        <label for="id"> Category Id</label>
                                        <input class="form-control" type="Number" id="cid" name="id" required="" min="0">
                                    </div>  -->
                                    <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="card-header text-center font-weight-bold" style="font-size: 2em">
				Toll Detail
			</div>
            <div class="card-body">
        <div class="row">
          <div class="col-lg-6 color-img-three" >
            <img src="images/t2.jpg"  class="img-fluid" >
          </div>
          <div class="col-lg-6 blog-left-sub">
            
            <p>During operation and maintenance of tolled stretches of National Highways (NHs), the DBFOT Concessionaires/ OMT Concessionaires / User Fee Collection Contractors have been mandated to collect user fee (toll) from road users. The applicable user-fee (toll) rates for various categories of vehicles shall be displayed at the respective Toll Plaza. Toll Information System (TIS) has been devised to put in place a mechanism, whereby the road users can ascertain through public domain the exact user fee (toll) rates for a particular plaza OR a particular journey between two stations through a selected route. In addition it will also help disseminate information about the concessions/ discounts to local and frequent users, provision of various facilities on toll road, important telephone numbers, etc.</p>
            
          </div>
        </div>
        <br><br>
        <div class="row mt-lg-5 mt-md-4 mt-3">
          <div class="col-lg-6 blog-left-sub">
           
           
            <p>The Ministry of Road Transport & Highways, an apex organisation under the Central Government, is entrusted with the task of formulating and administering, in consultation with other Central Ministries/Departments, State Governments/UT Administrations, organisations and individuals, policies for Road Transport, National Highways and Transport Research with a view to increasing the mobility and efficiency of the road transport system in the country. The Ministry has two wings : Roads wing and Transport wing.
            </p>
            
          </div>
          <div class="col-lg-6 color-img-three">
            <img src="images/t3.jpg" alt="news image" class="img-fluid">
          </div>
        </div>
      </div>
      </div>
    </section>
    </div>
    </div>
    </div>

                                       
    
    


            <!--End Row-->





        <!--End Row-->


        <!--End Row-->


        <!--End Dashboard Content-->
        <!--start overlay-->

        <!-- End container-fluid-->


        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container" style="align:bottom;>
      
          <div class=" text-center">
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