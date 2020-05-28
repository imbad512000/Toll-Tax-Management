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
    <form action="#	" method="post" accept-charset="utf-8">
        <div class="container m-5 card text-light bg-transparent m-auto+" style="font-weight: 650;">
            <div class="card-header text-center font-weight-bold" style="font-size: 2em">
                Forgot Password
            </div>
            <div class="card-body">
                <div class="form-group row text-center">
                    <label class="col-2" for="fname" style="font-size: 18px">Email-id</label>
                    <input type="email" name="email" placeholder="Enter Registered Email-id" class="form-control col-6"
                        required>
                </div>
                <!-- <div class="form-group row">
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
					<input type="email" name="email" placeholder="Enter Email" class="form-control col-8" required>
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
					<input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control col-8"
					> -->
            </div>
            <div class="form-group row">
                <input type="submit" name="dob4" value="Submit" class="btn btn-light offset-4 col-3 font-weight-bold">
            </div>
        </div>
        </div>
    </form>
</body>

</html>

<?php
	


				if(isset($_POST['dob4']))
				{

					//include 'dbcon.php';
					$con = mysqli_connect("localhost","root","","start");
					// if($con){
					// 	echo "con";
					// }else
					// {
					// 	echo "not";
					// }
					

					if($_POST){
						$mail=$_POST['email'];

						$q="SELECT * FROM `tbl_customer_registration` WHERE `cust_reg_email`='$mail'";
						$res=mysqli_query($con,$q);
						$count=mysqli_num_rows($res);
						$row=mysqli_fetch_array($res);

						

						if($count>0){
							echo $row['cust_reg_password'];
							// print_r('$row');
							$msg = "Hi $mail Your Password is {$row['cust_reg_password']}";
							 //recipient email here
							$rec = "$mail";
							 //send 
							$sub="FORGOT PASSWORD";
							mail($rec,$sub,$msg);
							echo "Your Password has been sent to your registered-id.";
							header('location: final_login.php');

						}
						else{
							echo"<script>alert('Email Address not found');</script>";
						}
				}
			}

?>