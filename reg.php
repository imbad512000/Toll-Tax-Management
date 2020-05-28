<?php
    ob_start();
?>
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
<body class="" background="../files/assets/img1/1.jpg" style="background-size: 100%">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
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
    // if(isset($_REQUEST['sub1']))
    // {

    //     // if(empty($_REQUEST['email']) || empty($_REQUEST['pass'])){
    //     //  $error="Email-id and Password Invalid";
    //     // }
    //     // else{
    //         $con = mysqli_connect("localhost","root","","start");

    // //session_start();  
    // // if($con == TRUE)
    // // {
    // //  echo "con";
    // // }
    // // else
    // // {
    // //  echo "not Con";
    // // }

    //                 $email=$_REQUEST['email'];
    //                 $password=$_REQUEST['pass'];
                    


    //             $q = "SELECT * FROM `tbl_customer_registration` WHERE `cust_reg_email`='$email' AND `cust_reg_password`='$password'";
    //             $res = mysqli_query($con,$q); 
                    
    //             $row = mysqli_num_rows($res);   


    //             if($row > 0){
    //                 header("location: final_login.php");

    //             }else{
    //                 echo "<center><h5>Invalid Email-id & Password</h5></center>";   
    //             }


    //             // if(isset($did))
    //             // {    
    //             //  header('location: index3.php');

    //             //  //header('location: welcome.php');
                    
    //             //  $_SESSION['user_email']=$email;
    //             // }
    //             // else if(!isset($did))
    //             // {
    //             //  echo "<center><h3>Invalid Email-id & Password</h3></center>";
    //             //  //echo "Error :".$sql;
    //             // }


    //             //  $q=mysqli_query($con,"SELECT `cust_reg_id` FROM `tbl_customer_registration` WHERE `cust_reg_email`='$email' `cust_reg_password`='$password'");

    //             //  $row=mysqli_num_rows($q);

    //             //  if($row==1){
    //             //      header("location: index3.php");
    //             //  }
    //             //  else{
    //             //      $error="Invalid Email-id & Password";
    //             //  }

    //             // }

                    
    //                     // $message="";
    //                     // if(count($_POST)>0) {
    //                     //  $result = mysqli_query($con,"SELECT * FROM tbl_customer_registration WHERE `cust_reg_email`='" . $_POST["email"] . "' and `cust_reg_password` = '". $_POST["pass"]."'");
    //                     //  $count  = mysqli_num_rows($result);
    //                     //  if($count==0) {
    //                     //      $message = "Invalid Username or Password!";
    //                     //  } else {
    //                     //      header("location: index3.php");
    //                     //  }
                    
    //             ob_flush();
    //     }


                if(isset($_REQUEST['sub1']))
                {

                    $con = mysqli_connect("localhost","root","","start");
                    // if($con){
                    //  echo "con";
                    // }else
                    // {
                    //  echo "not";
                    // }
                    $name=$_REQUEST['fname'];
                    $lname=$_REQUEST['lname'];
                    $gender=$_REQUEST['gender'];
                    $email = $_REQUEST['email'];    
                    $password=$_REQUEST['pass'];
                    $repeat_password=$_REQUEST['repass'];
                    $contact=$_REQUEST['phno'];
                    $DOB=$_REQUEST['dob'];

                
                    $sq =  "SELECT `cust_reg_email` FROM `tbl_customer_registration` WHERE `cust_reg_email` = '$email'";

                    $value = mysqli_query($con,$sq);
                    $demail = mysqli_fetch_assoc($value);   
                    $uemail = "";

                                //echo $demail['cust_reg_email'];
                                $uemail = $demail['cust_reg_email'];                    
                    

                             if($uemail==$email){
                                        echo "<center><h4>User exist already</h4></center>";
                                }
                                else{
                                        //echo "User not exist";
                                        $q = "INSERT INTO `tbl_customer_registration`(`cust_reg_id`, `cust_reg_first_name`, `cust_reg_last_name`, `cust_reg_gender`, `cust_reg_email`, `cust_reg_password`, `cust_reg_DOB`) VALUES ('','$name','$lname','$gender','$email','$password','$DOB')";

                                        $res = mysqli_query($con,$q); 

                                        if($res) 
                                        {
                                            header('location: final_login.php');
                                        }
                                        else
                                        {
                                            echo "Error ";
                                        }

                    
    
                }}
    
    ?>


                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->


                        
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    <!-- </body> -->
</html>
