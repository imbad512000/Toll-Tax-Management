<?php
  ob_start();  
  session_start();
  $con=mysqli_connect("localhost","root","","start");
  ?>
  <?php

      if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
        //Request hash
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';	
        if(strcasecmp($contentType, 'application/json') == 0){
            $data = json_decode(file_get_contents('php://input'));
            $hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
            $json=array();  
            $json['success'] = $hash;
            echo json_encode($json);
        
        }
        exit(0);
    }

    function getCallbackUrl()
    {
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'response.php';
    }

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
                <br><br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card" style="height: 1160px; width: 450px;">

                                <div class="card-body p-4">



                                    <center>
                                        <h3 class="auth-title">Create Pass</h3>
                                    </center>
                                    <br><br><br>

                                    <form action="#" id="payment_form">
                                    <input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
                                    <input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
                                    <div class="dv">
   
                                    <input type="hidden" id="key"  name="key" placeholder="Merchant Key" value="dFiumMOS" />
                                    <input type="hidden" id="salt"  name="salt"  placeholder="Merchant Salt" value="luBDnXhT4U" />

                                    <input type="hidden" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  "Toll".rand(10000,99999999)?>" />

                                    <input type="hidden" id="email" name="email" placeholder="Transaction ID" value="17bmiit049@gmail.com"/>

                                        <div class="form-group mb-3">
                                            <label for="password">Pass Holder Name</label>
                                            <input class="form-control" id="fname" type="text" name="fname" required=""
                                                placeholder="Enter your Holder Name" minlength="3" maxlength="15">
                                        </div>

                                        <!-- <div class="form-group mb-3">
                                            <label for="password">Email-Address</label>
                                            <input class="form-control" id="email" type="email" name="email" required
                                                placeholder="Enter your email address" value="">
                                        </div> -->

                                        <div class="form-group mb-3">
                                            <label for="password">Pass Date</label>
                                            <input class="form-control" type="date" id="pdate" name="pdate" value="<?php echo $datefun;?>"  readonly required="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Pass Time</label>
                                            <input class="form-control" type="Time" name="ptime" value="<?php echo $timefun;?>" readonly>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Type of Journey<span
                                                    class="text-danger"></span></label>
                                            <div class="">
                                                <select class="form-control" id="tj" onchange="taxamount()" name="type_of_vehicle_1"
                                                    data-style="btn-light">
                                                    <!-- <option>Select Journey Type</option> -->
                                                    <option value="sin">Single</option>
                                                    <option value="ret">Return</option>
                                                    <!-- <option value="B">Bus</option> -->
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Contact Number</label>
                                            <input class="form-control" id="mobile" type="tel" name="mobile" required="" maxlength="10" placeholder="Enter your Contact Number">
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Vehicle
                                                Type<span class="text-danger"></span></label>
                                            <div id="vtype">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password">Vehicle Number</label>
                                            <input class="form-control" id="pinfo" type="text" name="pinfo" required="" min="0"
                                                max="10" placeholder="Enter your Vehicle Number" pattern="^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{4}$">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputEmail3" class="col-5 col-form-label">Pass Duration<span
                                                    class="text-danger"></span></label>
                                            <div class="">
                                                <select class="form-control" id="duration"  onchange="taxamount()" name="duration"
                                                    data-style="btn-light">
                                                    <option>Select Duration</option>
                                                    <option value="1 month">1 month</option>
                                                    <option value="3 month">3 month</option>
                                                    <option value="6 month">6 month</option>
                                                    <option value="1 year">Valid for Year</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group mb-3">
                                            <label for="password">Exipry Date</label>
                                            <input class="form-control" id="pass_date" type="date" onclick="dateset()" name="edate" required="">
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="password">Tax Amount</label>
                                            <input class="form-control" type="Number" id="amount" name="amount" required readonly>
                                        </div>

                                        <input type="hidden" id="hash" name="hash" placeholder="Hash" value="" />
                                        <br><br>
                                        <div class="form-group mb-0 text-center">
                                        <div><input type="submit" class="btn btn-success btn-block" value="Pay" name="sub1"; onclick="launchBOLT(); return false;" /></div>
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

                    function taxamount() {
                        //  alert(document.getElementById("vt").value);
                        var xmthttp = new XMLHttpRequest();
                        xmthttp.open("GET", "pass_taxamount.php?vct="+document.getElementById("vt").value+"&tj="+document.getElementById("tj").value+"&duration="+document.getElementById("duration").value, false);
                        xmthttp.send(null);
                        document.getElementById("amount").value = xmthttp.responseText;
                        // alert(xmthttp.responseText);
                    }

                    function dateset() {
                        //  alert(document.getElementById("vt").value);
                        var xmthttp = new XMLHttpRequest();
                        xmthttp.open("GET", "dateset.php?pdate="+document.getElementById("pdate").value+"&duration="+document.getElementById("duration").value, false);
                        xmthttp.send(null);
                        document.getElementById("pass_date").value = xmthttp.responseText;
                        document.getElementById("pass_date").readOnly=true;

                        // alert(xmthttp.responseText);
                        
                    }   

                    // document.getElementById("").readOnly=true;
                    // document.getElementById("fname").readOnly=true;
                    // document.getElementById("amount").readOnly=true; 
                    </script>
                    <!-- Index js -->
                    <script src="assets2/js/index.js"></script>
                    <script type="text/javascript">
$('#payment_form').bind('keyup blur', function(){
	$.ajax({
          url: 'create_pass.php',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
			salt: $('#salt').val(),
			txnid: $('#txnid').val(),
			amount: $('#amount').val(),
		    pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
			email: $('#email').val(),
			mobile: $('#mobile').val(),
			udf5: $('#udf5').val()
          }),
		  contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
			 $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
			else if (json['success']) {	
				$('#hash').val(json['success']);
            }
          }
        }); 
});
//-->
</script>

<script type="text/javascript">
function launchBOLT()
{
	bolt.launch({
	key: $('#key').val(),
	txnid: $('#txnid').val(), 
	hash: $('#hash').val(),
	amount: $('#amount').val(),
	firstname: $('#fname').val(),
	email: $('#email').val(),
	phone: $('#mobile').val(),
	productinfo: $('#pinfo').val(),
	udf5: $('#udf5').val(),
	surl : $('#surl').val(),
	furl: $('#surl').val(),
	mode: 'dropout'	
},{ responseHandler: function(BOLT){
	console.log( BOLT.response.txnStatus );		
	if(BOLT.response.txnStatus != 'CANCEL')
	{
		//Salt is passd here for demo purpose only. For practical use keep salt at server side only.
		var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
		'<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
		'<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
		'<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
		'<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
		'<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
		'<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
		'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
		'<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
		'<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
		'<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
		'<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
		'</form>';
		var form = jQuery(fr);
		jQuery('body').append(form);								
		form.submit();
	}
},
	catchException: function(BOLT){
 		alert( BOLT.message );
	}
});
}
//--
</script>	

</body>

<!-- Mirrored from codervent.com/dashtreme/demo/dark-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 11:06:39 GMT -->

</html>
<?php

    if(isset($_REQUEST['sub1'])){


      $pass_holder_name=$_REQUEST['fname'];
      $pass_date=$_REQUEST['pdate'];
      $pass_time=$_REQUEST['ptime'];
      $type_of_journey_1=$_REQUEST['type_of_vehicle_1'];

    //   $contact_num=$_REQUEST['mobile'];

      $vehicle_class=$_REQUEST['type_of_vehicle'];
      $vehicle_number=$_REQUEST['pinfo'];
      $exipry_date=$_REQUEST['edate'];
      $Tax_amount=$_REQUEST['amount'];

    $suspage="http://localhost/Toll-Tax-Management/sus.php";
    $fpage="http://localhost/Toll-Tax-Management/fpage.php";
    $taxid = "TOLL".mt_rand();

        // print_r($_REQUEST);

    //   echo "$type_of_journey_1";  

      $q="INSERT INTO `tbl_toll_pass_details`(`toll_pass_id`, `toll_pass_holder_name`, `toll_pass_date`, `toll_pass_time`, `toll_pass_type`, `toll_pass_vehicle_class`, `toll_pass_vehicle_no`, `toll_pass_duration`, `toll_pass_amount`) VALUES ('','$pass_holder_name','$pass_date','$pass_time','$type_of_journey_1','$vehicle_class','$vehicle_number','$exipry_date','$Tax_amount')";

      $res=mysqli_query($con,$q);
      

    //   $row=mysqli_fetch_assoc($res);

    //   print_r($row);

    //   if($res){
    //     header("location: search_pass.php");
    //   }
    //   else{
    //     echo "<script>alert('Error in Query')</script>";
    //   }          

     

    
    ob_flush();
      
    }

  ?>

<?php
    $MERCHANT_KEY = "dFiumMOS";
    $SALT = "luBDnXhT4U";
?>