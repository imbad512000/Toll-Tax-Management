<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets2/css/bootstrap.css">
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <script src="assets2/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="assets2s/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <title>Login</title>
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
<br><br><br><br><br><br>
<body class="" background="assets/img/a1.jpg" style="background-size: 100%">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-9">
                    <div class="card">

                        <div class="card-body p-4" style="border-style: solid" ;>


                            <center>
                                <h3 class="auth-title">Forget Password</h3>
                            </center>
                            <br>

                            <form action="#">

		
            <div class="card-body">
                <div class="form-group row text-center">
                    <label class="col-4" for="fname" style="font-size: 18px">Email-id</label>
                    <input type="email" name="email" placeholder="Enter Registered Email-id" class="form-control col-6"
                        required>
                </div><br><br>
				<div class="form-group row">
                <input type="submit" name="dob4" value="Submit" class="btn btn-light offset-4 col-3 font-weight-bold" style="background-color:lightgrey;">
            </div>
			</div>
			</div>
                            </form><br>

                           
                            <br><br>














            </div>
           
        </div>
        </div>
    
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