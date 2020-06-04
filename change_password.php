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
		<div class="container m-5 text-light bg-transparent m-auto" style="font-weight: 650;">
			<br><br><br>
			<div class="text font-weight-bold" style="margin-left: 160px;font-size: 3em">
			 	Change Password
			</div>
			<br>
			<div class="card-body">
				<div class="form-group row" style="font-size: 1.5em">
					<label class="col-3" for="fname">Old Password</label>
					<input type="text" name="pass1" placeholder="Enter Old password" class="form-control col-4" required>
				</div>
				<div class="form-group row" style="font-size: 1.5em">
					<label class="col-3" for="fname">New Password</label>
					<input type="text" name="pass2" placeholder="Enter new password" class="form-control col-4" required>
				</div>
				<div class="form-group row" style="font-size: 1.5em">
					<label class="col-3" for="lname">Re-type Password</label>
					<input type="password" name="pass3" placeholder="Re-enter new password" class="form-control col-4" required>
				</div>
				<br>
				<div class="form-group row" style="font-size: 2em">
					<input type="submit" name="sub2" value="Submit" class="btn btn-light offset-4 col-2 font-weight-bold"> 
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
	
	$old_pass=$_REQUEST['pass1'];
	$password=$_REQUEST['pass2'];
	$retype_password=$_REQUEST['pass3'];

	$aa = "SELECT * FROM `tbl_customer_registration` WHERE `cust_reg_password`='$old_pass'";
	$q1=mysqli_query($con,$aa);
	$data=mysqli_fetch_assoc($q1);
	$row=mysqli_num_rows($q1);
	$pass = "";
	if($row == 1){
		$pass = $data["cust_reg_password"];
	}

			if($pass==$old_pass)
			 {
					if($password==$retype_password)
					{
						$q=mysqli_query($con,"UPDATE `tbl_customer_registration` SET `cust_reg_password`='$password' WHERE `cust_reg_password`='$old_pass'");
							
							if($q)
							{
								header('location: final_login.php');
								// echo "Password successfully changed";
							}

					}
				}
				else
				{
					echo "<script>alert('Old password and New password not match')</script>";
				}
			
	}
	

?>