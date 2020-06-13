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

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <br><br><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card" style="height: 1290px; width: 480px;">

                                <div class="card-body p-4">



                                    <center>
                                        <h3 class="auth-title">Create Receipt</h3>
                                    </center>
                                    <br><br><br>

                                    <form action="" method="post">

                                        <!-- <div class="form-group mb-3">
                                        <label for="id"> Category Id</label>
                                        <input class="form-control" type="Number" id="cid" name="id" required="" min="0">
                                    </div>  -->

                                        <div class="form-group mb-3">
                                            <label for="password">Toll Booth Name</label>
                                            <input class="form-control" type="text" name="tbname" required=""
                                                placeholder="Enter your Toll Booth Name" minlength="3" maxlength="15">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Toll Booth Number</label>
                                            <input class="form-control" type="number" name="tbno" min="0" max="13">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Toll Employee Name</label>
                                            <input class="form-control" type="text" name="ename" required=""
                                                placeholder="Enter your employee name" minlength="3" maxlength="15">
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="password">Customer Name</label>
                                            <input class="form-control" type="text" name="rname" required="" placeholder="Enter Customer Name">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Contact Number</label>
                                            <input class="form-control" type="tel" name="contact" required="" maxlength="10" placeholder="Enter your Vehicle Number">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Receipt Date</label>
                                            <input class="form-control" type="date" name="pdate" required="" min="2020-01-01" max="2020-12-31">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Receipt Time</label>
                                            <input class="form-control" type="Time" name="ptime">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Vehicle
                                                Category<span class="text-danger"></span></label>
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
                                                    <option value="sin">Single</option>
                                                    <option value="ret">Return</option>
                                                    <!-- <option value="B">Bus</option> -->
                                                </select>

                                            </div>
                                        </div>




                                        <div class="form-group mb-3">
                                            <label for="password">Vehicle Number</label>
                                            <input class="form-control" type="text" name="vno" required=""
                                                placeholder="Enter your Vehicle Number" pattern="[A-Z][A-Z][0-9][0-9][A-Za-z][A-Za-z][0-9][0-9][0-9][0-9]">
                                            <!-- pattern="[G][J][0-9][0-9][A-Z][A-Z][0-9][0-9][0-9][0-9]" -->
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">E-mail Address</label>
                                            <input class="form-control" type="email" name="mail" required="" 
                                                 placeholder="Enter your e-mail address">
                                        </div>



                                        <div class="form-group mb-3">
                                            <label for="password">Tax Amount</label>
                                            <input class="form-control" type="number" name="tamount" required="">
                                            <!-- disabled="disabled" -->
                                        </div>

                                        <br><br>
                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-danger btn-block" type="submit" name="sub1"> Create
                                                Receipt </button>
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

</html><br><br><br>


<?php

    if(isset($_REQUEST['sub1'])){

      $con=mysqli_connect("localhost","root","","start");

      // $toll_id=$_REQEST['id'];
      $toll_booth=$_REQUEST['tbname'];
      $toll_booth_no=$_REQUEST['tbno'];
      $toll_emp_name=$_REQUEST['ename'];

      $receipt_name=$_REQUEST['rname'];
      $contact_num=$_REQUEST['contact'];

      $receipt_date=$_REQUEST['pdate'];
      $receipt_time=$_REQUEST['ptime'];
      $vehcile_category=$_REQUEST['type_of_vehicle'];
      $type_journey=$_REQUEST['type_of_journey'];
      $Vehicle_no=$_REQUEST['vno'];
      $Tax_amount=$_REQUEST['tamount'];

      $suspage="http://localhost/Toll-Tax-Management/sus.php";
      $fpage="http://localhost/Toll-Tax-Management/fpage.php";
      $taxid = "TOLL".mt_rand();

      $q="INSERT INTO `tbl_toll_receipt_details`(`toll_receipt_id`, `toll_booth_name`, `toll_booth_no`, `toll_emp_name`, `toll_receipt_date`, `toll_receipt_time`, `type_of_vehicle`, `journey_type`,`vehicle_no`, `toll_amount`) VALUES ('','$toll_booth','$toll_booth_no','$toll_emp_name','$receipt_date','$receipt_time','$vehcile_category','$type_journey','$Vehicle_no','$Tax_amount')";

      $res=mysqli_query($con,$q);

      $MERCHANT_KEY = "dFiumMOS";
      $SALT = "luBDnXhT4U";

      $PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
      //$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

      $action = '';

      $posted = array();
      if(!empty($_POST)) {
          //print_r($_POST);
        foreach($_POST as $key => $value) {    
          $posted[$key] = $value; 	

            }
      }

      $formError = 0;

      if(empty($posted['txnid'])) {
        // Generate random transaction id
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
      } else {
        $txnid = $posted['txnid'];
      }
      $hash = '';
      $ser = "payu_paisa";
      // Hash Sequence
    //   $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
      $hashSequence = $MERCHANT_KEY."|".$taxid."|". $Tax_amount."|".$vehicle_number."|".$receipt_name."|".$mail;
      if(empty($posted['hash']) && sizeof($posted) > 0) {
        if(
                empty($posted[$MERCHANT_KEY])
                || empty($posted[$taxid])
                || empty($posted[$Tax_amount])
                || empty($posted[$receipt_name])
                || empty($posted[$mail])
                || empty($posted[$contact_num])
                || empty($posted[$vehicle_no])
                || empty($posted[$suspage])
                || empty($posted[$fpage])
            || empty($posted[$ser])
        ) {
          $formError = 1;
        } else {
          //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
        $hashVarsSeq = explode('|', $hashSequence);
          $hash_string = '';	
        foreach($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
          }

          $hash_string .= $SALT;
          $hash = strtolower(hash('sha512', $hash_string));
          $action = $PAYU_BASE_URL . '/_payment';
        }
      } elseif(!empty($posted['hash'])) {
        $hash = $posted['hash'];
        $action = $PAYU_BASE_URL . '/_payment';
      }

    }
    ob_flush();
?>


<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>

<body onload="submitPayuForm()">
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <?php if($formError) { ?>
    <span style="color:red">Please fill all mandatory fields.</span>
    <br/>
    <br/>
  <?php } ?> 
  <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-6">
                            <div class="card" style="height: 920px; width: 550px;">
                                 
                                    <div class="card-body p-4">

                                    <center>
                                        <h3 class="auth-title">Confirm Payment Detail</h3>
                                    </center>
                                    <br><br>


                                        <!-- <div class="form-group mb-3">
                                        <label for="id"> Category Id</label>
                                        <input class="form-control" type="Number" id="cid" name="id" required="" min="0">
                                    </div>  -->

                                        <div class="form-group mb-3">
                                            <label for="password">Amount:</label>
                                            <input class="form-control" name="amount" value="<?php echo $posted['Tax_amount']; ?>" />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">First Name:</label>
                                            <input class="form-control" name="firstname" id="firstname" value="<?php echo $posted['rname']; ?>" />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Email: </label>
                                            <input  class="form-control" name="email" id="email" value="<?php echo $posted[$mail];  ?>" />
                                        </div>

                                       
                                        <div class="form-group mb-3">
                                            <label for="password">Phone: </label>
                                            <input  class="form-control" name="phone" value="<?php echo $posted['contact']; ?>" />
                                        </div>

                                    
                                        <div class="form-group mb-3">
                                            <label for="password">Product Info:</label>
                                            <textarea class="form-control" name="productinfo"><?php echo $posted['vno']; ?></textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Success URI:</label>
                                            <input class="form-control" name="surl" value="http://localhost/Toll-Tax-Management/sus.php" size="64" />
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="password">Failure URI:</label>
                                            <input class="form-control" name="furl" value="http://localhost/Toll-Tax-Management/fpage.php" size="64" />
                                                
                                        </div>


                                        <div class="form-group mb-3">
                                        <input class="form-control" type="hidden" name="service_provider" value="payu_paisa" size="64" /> 
                                        </div>


                                       <div>
                                        <?php if(!$hash) { ?>
                                            <div class="form-group mb-0 text-center">
                                            <input class="btn btn-danger btn-block" name="submit" value="Submit" />
                                            </div>
                                        <?php } ?>
                                        </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>

                                
             </table>
    </form>
  </body>
