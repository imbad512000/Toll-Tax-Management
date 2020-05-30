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