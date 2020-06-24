<?php

    // if(isset($_REQUEST['sub1'])){

      $con=mysqli_connect("localhost","root","","start");

      // $toll_id=$_REQEST['id'];
    //   $toll_booth=$_REQUEST['tbname'];
    //   $toll_booth_no_1=$_REQUEST['tbno'];
    //   $toll_emp_name_1=$_REQUEST['empname'];
    //   $receipt_date=$_REQUEST['pdate'];
    //   $toll_receipt_time=$_REQUEST['ptime'];
    //   $vehcile_category=$_REQUEST['type_of_vehicle'];
    //   $type_journey=$_REQUEST['type_of_journey'];
    //   $Vehicle_no=$_REQUEST['vno'];
    //   $Tax_amount=$_REQUEST['tamount'];
 

    //   print_r($_REQUEST);


    $result1 = mysqli_query($con,"INSERT INTO `tbl_toll_receipt_details` VALUES ('','BHATIA',2,'bhavik','2020-08-07','08:08','2 Wheeler','single','gj05',70) or die(mysqli_error($con))");

     
     
    // if (!mysqli_query($con,"INSERT INTO `tbl_toll_receipt_details`(`toll_receipt_id`,`toll_booth_name`, `toll_booth_no`, `toll_emp_name`, `toll_receipt_date`, `toll_receipt_time`, `type_of_vehicle`, `journey_type`,`vehicle_no`, `toll_amount`) VALUES ('','$toll_booth','$toll_booth_no_1','$toll_emp_name_1','$receipt_date','$receipt_time','$vehcile_category','$type_journey','$Vehicle_no','$Tax_amount')"))
    // {
    // echo("Errorcode: " . mysqli_errno($con));
    // }

    //   if($res){
    //     header("location: search_receipt.php");
    //   }
    //   else{
    //     echo "<script>alert('Error in Query')</script>";
    //   }


    


?>