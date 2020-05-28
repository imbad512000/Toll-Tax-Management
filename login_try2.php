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
<body class="" background="assets/img/bg.jpg" style="background-size: 100%">
	<form action="#" method="post" accept-charset="utf-8">
		<div class="container m-5 card text-dark bg-transparent" style="font-weight: 650;">
			<div class="card-header text-center font-weight-bold" style="font-size: 2em">
				Sign In
			</div>
			<div class="card-body">
				<div class="form-group row">
					<label class="col-3" for="fname">E-mail</label>
					<input type="email" name="email" placeholder="Enter Email-id" class="form-control col-8">
				</div>
				<div class="form-group row">
					<label class="col-3" for="lname">Password</label>
					<input type="password" name="pass" placeholder="Enter Password" class="form-control col-8">
				</div>
				<div class="form-group row">
					<input type="submit" name="sub1" value="Login" class="btn btn-light offset-4 col-4 font-weight-bold"> 
				</div>
			</div>
		</div>
	</form>
</body>
</html>
<?php

				if(isset($_REQUEST['dob1']))
				{

					//include 'dbcon.php';
					$con = mysqli_connect("localhost","root","","start");
					<!-- if($con){
						echo "con";
					}else
					{
						echo "not";
					} -->
					$mail=$_REQUEST['email'];
					$password=$_REQUEST['pass'];

				
					$q = "SELECT * FROM `tbl_login` WHERE login_email='$mail' AND login_password='$password'";
					$res = mysqli_query($con,$q); 

				if($res)
				{
					echo "log in successfully";
				}
				else
				{
					echo "invalid id & password";
				}
				

				}

?>