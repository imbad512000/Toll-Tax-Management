<?php
    $con=mysqli_connect("localhost","root","","start");
    $vtype = $_GET["vct"];
    $tj=$_GET["tj"];
    // echo "$vtype";
    $q= "SELECT * FROM `tbl_vehicle_category` WHERE `vehicle_type`='$vtype'";
    $res = mysqli_query($con,$q);
    $tax=mysqli_fetch_assoc($res);
    $amout=$tax["tax_amount"];
    

    if($tj == "Single"){
        echo "$amout";  
    }else{
        $fa = $amout * 2;
        $discount=$fa*10/100;
        $a=$fa-$discount;
        echo $a;
    }
    
 ?>