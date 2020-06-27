<?php
    $con=mysqli_connect("localhost","root","","start");
    $vtype = $_GET["vct"];
    $tj=$_GET["tj"];
    $duration=$_GET["duration"];
    $q= "SELECT * FROM `tbl_vehicle_category` WHERE `vehicle_type`='$vtype'";
    $res = mysqli_query($con,$q);
    $tax=mysqli_fetch_assoc($res);
    $amout=$tax["tax_amount"];


    if($duration == "1 month"){
        if($tj == "sin"){
            $damount=$amout*30;
            echo "$damount";  
        }else{
            $damount=$amout*30;
            $fa = $damount * 2;
            $discount=$fa*10/100;
            $a=$fa-$discount;
            echo $a;
        }
    }elseif($duration == "3 month"){
        if($tj == "sin"){
            $damount=$amout*90;
            echo "$damount";  
        }else{
            $damount=$amout*90;
            $fa = $damount * 2;
            $discount=$fa*10/100;
            $a=$fa-$discount;
            echo $a;
        }
    }
    elseif($duration == "6 month"){
        if($tj == "sin"){
            $damount=$amout*180;
            echo "$damount";  
        }else{
            $damount=$amout*180;
            $fa = $damount * 2;
            $discount=$fa*10/100;
            $a=$fa-$discount;
            echo $a;
        }
    }
    elseif($duration == "1 year"){
        if($tj == "sin"){
            $damount=$amout*365;
            echo "$damount";  
        }else{
            $damount=$amout*365;
            $fa = $damount * 2;
            $discount=$fa*10/100;
            $a=$fa-$discount;
            echo $a;
        }
    }

    
    


 ?>