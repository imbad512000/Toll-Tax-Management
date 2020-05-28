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
<body class="" background="assets/img/password1.jpg" style="background-size: 100%">
	<form action="#" method="post" accept-charset="utf-8">
		<div class="container m-5 card text-light bg-transparent m-auto" style="font-weight: 650;">
			<div class="card-header text-center font-weight-bold" style="font-size: 2em">
			 	Password Reset
			</div>
			<div class="card-body">
				<div class="form-group row">
					<label class="col-3" for="fname">New Password</label>
					<input type="password" name="pass1" placeholder="Enter new password" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<label class="col-3" for="lname">Re-type Password</label>
					<input type="password" name="pass2" placeholder="Re-enter new password" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<input type="submit" name="sub2" value="Submit" class="btn btn-light offset-4 col-4 font-weight-bold"> 
				</div>
			</div>
		</div>
	</form>
</body>
</html>
<?php

	if(isset($_REQUEST['sub2']))
	{

	$con = mysqli_connect("localhost","root","","start");

	session_start();
	$user=$_SESSION['user_email'];

	$password=$_REQUEST['pass1'];
	$retype_password=$_REQUEST['pass2'];

	$q="UPDATE `tbl_customer_registration` SET `cust_reg_password`='$password' WHERE `cust_reg_email`='$user'";

	$res = mysqli_query($con,$q); 

				if($res)
				{
					header('location: final_login.php');
					echo "Password successfully changed";
				}
				else
				{
					echo "Error :".$sql;
				}


				}
	

?>