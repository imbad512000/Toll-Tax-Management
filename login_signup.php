<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/loginsignup.css">

</head>
<body>

	<div class="login-wrap">
	<form method="Post" action="#">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="Email" name="email" class="input">
				</div>

				
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password"  name="pass1" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="submit" class="button" value="Sign In">
				</div>
				<div class="hr">
				
				</div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			</form>

			<?php

				if(isset($_REQUEST['submit'])){

					include 'dbcon.php';
					$email = $_REQUEST['email'];	
					$password=$_REQUEST['pass1'];

					$q = "SELECT * FROM `tbl_login`";
					$res = mysqli_query($con,$q); 

				if($res)
				{
					echo "log in";
				}
				else
				{
					echo "not log in ";
				}

				}

			?>
			<!---<form method="Post" action="loginsignup.php">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Name</label>
					<input id="user" type="text" name="name" class="input">
				</div>
					<div class="group">
						<div class="radio-group" >
						<label for="gen" class="label">Gender</label>
						<div style="display: flex;">
							<input id="gen"  type="radio" class="input" name="gen" value="Male">Male
							<input id="gen" type="radio" class="input" name="gen" value="Female">Female
						</div>
						</div>
				</div>
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" type="email"  name="email" class="input" data-type="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pno" class="label">Phone No</label>
					<input id="pno" type="text" name="phone" class="input" name="pno">

				</div>
				<div class="group">
						<label for="pno" class="label">Date Of Birth</label>
						<input id="date" name="date1" type="Date" class="input" name="DOB">

				</div>
				<div class="group">
					<input type="Submit" name="submit1" class="button" value="Sign Up" a href="">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</form>
			<?php

				if(isset($_REQUEST['submit'])){

					// include 'dbcon.php';
					$con = mysqli_connect("localhost","root","","start");
					$name=$_REQUEST['name'];
					$gender=$_REQUEST['gen'];
					$email = $_REQUEST['email'];	
					$password=$_REQUEST['pass1'];
					$contact=$_REQUEST['phone'];
					$DOB=$_REQUEST['date1'];

					$q = "INSERT INTO `tbl_customer_registration`(`cust_reg_id`, `cust_reg_first_name`, `cust_reg_last_name`, `cust_reg_gender`, `cust_reg_email`, `cust_reg_password`, `cust_reg_DOB`) VALUES ('','$name','$gen','$email','$pass1','$phone','$date1')";
					$res = mysqli_query($con,$q); 

				if($res)
				{
					echo "Registered";
				}
				else
				{
					echo "not registered ";
				}

				}

			?>
			</div>
		</div>
	</div>--->
	
</div>
</body>
