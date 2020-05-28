<!DOCTYPE html>
<html>
<head>
	<title>VEHICLE CATGORY</title>
</head>
<body>
<form action="#" method="post">
Category_id:<input type="text" pattern="[0-9]" name="id1" required>
Vehicle Type:<input type="text" name="vtype" required>
	<!-- <option>Choose Type</option>
	<option>2 Wheeler</option>
	<option>4 Wheeler</opti
	<option>6 Wheeler</option>
	<option>8 Wheeler</option> -->
</select>
Tax Amount:<input type="tel" name="amount" required>

<input type="submit" name="submit1" value="submit">
</form>
</body>
</html>

<?php


	if(isset($_REQUEST['submit1']))
	{

		$con = mysqli_connect("localhost","root","","start");

		$C_id=$_REQUEST['id1'];
		$Vehicle_type=$_REQUEST['vtype'];
		$Tax_Amount=$_REQUEST['amount'];

		$sq =  "SELECT  `vehicle_type` FROM `tbl_vehicle_category` WHERE `vehicle_type`='$Vehicle_type'";

					$value = mysqli_query($con,$sq);
					$insert = mysqli_fetch_assoc($value);	
					$add = "";

								//echo $demail['cust_reg_email'];
								//$add = $insert['category_id'];
								$add=$insert['vehicle_type'];
								//$add=$insert['tax_amount'];					
					

							 if($add==$Vehicle_type){
										echo "<center><h4>User exist already</h4></center>";
								}
								else{
										//echo "User not exist";
										$q = "INSERT INTO `tbl_vehicle_category`(`category_id`, `vehicle_type`, `tax_amount`) VALUES ('$C_id','$Vehicle_type','$Tax_Amount')";

										$res = mysqli_query($con,$q); 

										if($res) 
										{
											header('location: welcome.php');
										}
										else
										{
											echo "Error ";
										}
									}
						}
?>