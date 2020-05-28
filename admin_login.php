<?php
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<title></title>
</head>
<!-- 
	<form action="#" method="post" accept-charset="utf-8">
		<div class="container m-5 card text-dark bg-transparent m-auto" style="font-weight: 650;">
			<div class="card-header text-center font-weight-bold" style="font-size: 2em">
				Sign In
			</div>
			<div class="card-body">
				<div class="form-group row">
					<label class="col-3" for="fname">E-mail</label>
					<input type="email" name="email" placeholder="Enter Email-id" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<label class="col-3" for="lname">Password</label>
					<input type="password" name="pass" placeholder="Enter Password" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<input type="submit" name="sub1" value="Login" class="btn btn-light offset-4 col-4 font-weight-bold"> 
				</div>

				<center><a href="forget.php" style="text-decoration-line: none">forget passwoord</a></center>

			</div>
		</div>
	</form>
</body> -->
<!-- <body class="" background="assets/img/b1.jpg" style="background-size: 100%"> -->
	<body class="container">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                               

                                
                                <center><h5 class="auth-title">Sign In</h5></center>

                                <form action="#" method="post">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="text" name="pass" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit" name="sub1"> Log In </button>
                                    </div>

                                </form><br>

 <?php
	if(isset($_REQUEST['sub1']))
	{

		// if(empty($_REQUEST['email']) || empty($_REQUEST['pass'])){
		// 	$error="Email-id and Password Invalid";
		// }
		// else{
			$con = mysqli_connect("localhost","root","","start");

	//session_start();	
	// if($con == TRUE)
	// {
	// 	echo "con";
	// }
	// else
	// {
	// 	echo "not Con";
	// }

					$email=$_REQUEST['email'];
					$password=$_REQUEST['pass'];
						

						//print_r($_REQUEST);



				// $q = "INSERT INTO `tbl_admin_login`(`admin_email`, `admin_password`) VALUES ('$email','$password')";
				$q1="SELECT * FROM `tbl_admin_login` WHERE `admin_email`='$email' AND `admin_password`='$password'";
				$res = mysqli_query($con,$q1); 
				//$run = mysqli_query($con,$q1); 

				// $data= mysqli_fetch_assoc($run);

				$row= mysqli_num_rows($res);

					// print_r("$data");

				if($row>0){

					header("location: Admin1.php");

				}else{
					echo "<center><h5>Invalid Email-id & Password</h5></center>";	
				}
					
				ob_flush();
		}
	
	?>


                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->


                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Forgot your password?</a></p>
                                <p class="text-muted">Don't have an account? <a href="reg.php" class="text-muted ml-1"><b class="font-weight-semibold">Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    <!-- </body> -->
</html>
