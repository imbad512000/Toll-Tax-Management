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
<body class="" background="" style="background-size: 100%">
	<form action="#" method="post" accept-charset="utf-8">
		<div class="container m-4 card text-light bg-transparent m-auto+" style="font-weight: 650;">
			<div class="card-header text-center font-weight-bold" style="font-size: 2em">
				Employee Registration
			</div>
			<div class="card-body">
				<div class="form-group row">
					<label class="col-3" for="fname">First Name</label>
					<input type="text" name="fname" placeholder="Enter First Name" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<label class="col-3" for="lname">Last Name</label>
					<input type="text" name="lname" placeholder="Enter Last Name" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<label class="col-3">Gender</label>
					<input type="radio" name="gender" value="Male" class="mt-1">
					<label class="col-3" for="male">Male</label>
					<input type="radio" name="gender" value="Female" class="mt-1">
					<label class="col-3" for="female">Female</label>
				</div>
				<div class="form-group row">
					<label class="col-3" for="email">Email</label>
					<input type="email" pattern=(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\]) id="em" name="email" placeholder="Enter Email" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<label class="col-3" for="pass">Password</label>
					<input type="password" name="pass" placeholder="Enter Password" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<label class="col-3" for="repass">Re-type Password</label>
					<input type="password" name="repass" placeholder="Enter Re-type Password" class="form-control col-8" required>
				</div>
				<div class="form-group row">
					<label class="col-3" for="phno">Phone Number</label>
					<input type="tel" name="phno" placeholder="Enter Phone Number" class="form-control col-8" pattern="[0-9]{10}" required>
				</div>
				<div class="form-group row">
					<label class="col-3" for="dob">Date of Birth</label>
					<input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control col-8" max="2002-12-31" id="dob">					
				</div>
				<div class="form-group row">
					<label class="col-3" for="dob">Employee Aadhar-Card Number</label>
					<input type="tel" name="aadhar" placeholder="Enter Aadhar-card Number" class="form-control col-8" pattern="[0-9]{12}" 
					>
				</div>
				<div class="form-group row">
					<input type="submit" name="dob2" value="Register" class="btn btn-light offset-4 col-4 font-weight-bold">
				</div>
			</div>
		</div>
	</form>
</body>
</html>

			<?php
				if(isset($_REQUEST['dob2']))
				{
					//include 'dbcon.php';
					$con = mysqli_connect("localhost","root","","start");
					// if($con){
					// 	echo "con";
					// }else
					// {
					// 	echo "not";
					// }
					$name=$_REQUEST['fname'];
					$lname=$_REQUEST['lname'];
					$gender=$_REQUEST['gender'];
					$email = $_REQUEST['email'];	
					$password=$_REQUEST['pass'];
					$repeat_password=$_REQUEST['repass'];
					$contact=$_REQUEST['phno'];
					$DOB=$_REQUEST['dob'];
					$aadhar=$_REQUEST['aadhar'];

					//print_r($_REQUEST);
				
					$q = "INSERT INTO `tbl_employee_registration`(`emp_reg_id`, `emp_reg_first_name`, `emp_reg_last_name`, `emp_reg_gender`, `emp_reg_email`, `emp_reg_password`, `emp_reg_contact_num`, `emp_reg_DOB`, `emp_aadharcard_number`) VALUES ('','$name',$lname,'$gender','$email','$password','$contact','$DOB','$aadhar')";
					$res = mysqli_query($con,$q); 

						if($res == TRUE) 
						{
							echo "Call";
							header('location: final_login.php');
						}
						else
						{
							echo "Error ";
						}


					}
					ob_flush();
?>