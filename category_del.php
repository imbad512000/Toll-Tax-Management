<!DOCTYPE html>
<html>
<head>
	<title>VEHICLE CATGORY</title>
</head>
<body>
<form action="#" method="post">
Category_id:<input type="text" pattern="[0-9]" name="id1" required>
Vehicle Type:<select name="type_of_vehicle">
	<option>Choose Type</option>
	<option>2 Wheeler</option>
	<option>4 Wheeler</opti
	<option>6 Wheeler</option>
	<option>8 Wheeler</option>
</select>
<!-- Tax Amount:<input type="tel" name="amount" required> -->

<input type="submit" name="submit1" value="submit">
</form>
</body>
</html>

<?php

if(isset($_REQUEST['submit1'])){

	session_start();

	$con = mysqli_connect("localhost","root","","start");

	
	$C_id=$_REQUEST['id1'];
	$Vehicle_type=$_REQUEST['type_of_vehicle'];
	$Tax_Amount=$_REQUEST['amount'];


	$q="DELETE FROM `tbl_vehicle_category` WHERE `vehicle_type`='$Vehicle_type'";

	$res=mysqli_query($con,$q);

	if($res){
		header('location: welcome.php');
	}
	else{
		echo "Error :";
	}
}

?>