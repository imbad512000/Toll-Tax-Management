<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets2/css/bootstrap.css">
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <script src="assets2/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="assets2/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
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
<body class="" background="assets/img/2.jpg" style="background-size: 150%">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-7">
                        <div class="card">

                            <div class="card-body p-4" style="border-style: solid;">
                                
                               

                                
                                <center><h3 class="auth-title">Registration</h3></center>
                                <br>
                                <form action="#">

                                    <div class="form-group mb-3">
                                        <label for="fn">First Name</label>
                                        <input class="form-control" type="text" id="fn" name="fname" required="required" placeholder="Enter your First Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="ln">Last Name</label>
                                        <input class="form-control" type="text" id="ln" name="lname" required="required" placeholder="Enter your Last Name">
                                    </div>
                                    <div class="form-group row">
                                     <label class="col-3 offset-0" >Gender</label>
                                        <input type="radio" name="gender" value="Male" class="mt-0">
                                         <label class="col-2" for="male">Male</label>
                                            <input type="radio" name="gender" value="Female" class="ml-5">
                                            <label class="ml-3" for="female">Female</label>
                                         </div>

                                    <div class="form-group mb-3">
                                        <label for="em">Email Address</label>
                                        <input class="form-control" type="email" id="em" name="email" required="required" placeholder="Enter your Email Address">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="pass" required="required" id="password" placeholder="Enter your Password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="cpassword">Re-Password</label>
                                        <input class="form-control" type="password" name="repass" required="required" id="password" placeholder="Enter your  Re-Password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="phone">Phone No</label>
                                        <input class="form-control" type="tel" name="phno" required="required" id="phno" placeholder="Enter your Phone No" pattern="[0-9]{10}">
                                    </div>
                                    
                                     <div class="form-group mb-3">
                                        <label for="dob">Date Of Birth</label>
                                        <input class="form-control" type="Date" name="dob" required="required" id="dob" >
                                    </div>
                                    <div class="form-group row">
										<label class="col-3" for="dob">Employee Aadhar-Card Number</label>
										<input type="tel" name="aadhar" placeholder="Enter Aadhar-card Number" class="form-control col-8" pattern="[0-9]{12}">
									</div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit" name="sub1"> Register </button>
                                    </div>

                                </form><br>


                                <div class="row mt-3">
                            <div class="col-12 text-center">
                               Already having account?&nbsp;&nbsp;<a href="final_login.php"> Sign In</a>
                            </div> <!-- end col -->
                        </div><br><br>
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

				
					$q = "INSERT INTO `tbl_employee_registration`(`emp_reg_id`, `emp_reg_first_name`, `emp_reg_last_name`, `emp_reg_gender`, `emp_reg_email`, `emp_reg_password`, `emp_reg_contact_num`, `emp_reg_DOB`, `emp_aadharcard_number`) VALUES ('','$name',$lname,'$gender','$email','$password','$contact','$DOB','$aadhar')";
					
					$res = mysqli_query($con,$q); 

						if($res)
						{
							header('location: final_login.php');
						}
						else
						{
							echo "Error ";
						}


					}
?>