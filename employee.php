<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="w3th=device-width, initial-scale=1">
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




                            <center>
                                <h3 class="auth-title">Registration</h3>
                            </center>
                            <br>
                            <form action="#" method="post">

                                <div class="form-group mb-3">
                                    <label for="fn">First Name</label>
                                    <input class="form-control" type="text" id="fn" name="fname" required="required"
                                    minlength="3" maxlength="15" placeholder="Enter your First Name">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ln">Last Name</label>
                                    <input class="form-control" type="text" id="ln" name="lname" required="required"
                                    minlength="3" maxlength="15" placeholder="Enter your Last Name">
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 offset-0">Gender</label>
                                    <input type="radio" name="gender" value="Male" class="mt-0">
                                    <label class="col-2" for="male">Male</label>
                                    <input type="radio" name="gender" value="Female" class="ml-5">
                                    <label class="ml-3" for="female">Female</label>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="em">Email Address</label>
                                    <input class="form-control" type="email" pattern=(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\]) id="em" name="email" required="required"
                                        placeholder="Enter your Email Address">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="text" name="pass" required="required"
                                        id="password" placeholder="Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="cpassword">Re-Password</label>
                                    <input class="form-control" type="password" name="repass" required="required"
                                        id="password" placeholder="Enter your  Re-Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="phone">Phone No</label>
                                    <input class="form-control" type="tel" name="phno" required="required" id="phno"
                                        placeholder="Enter your Phone No" pattern="[0-9]{10}">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="dob">Date Of Birth</label>
                                    <input class="form-control" type="Date" name="dob" required="required" max="2002-12-31" id="dob">
                                </div>
                                <div class="form-group row">
                                    <label class="col-3" for="dob">Employee Aadhar-Card Number</label>
                                    <input type="tel" name="aadhar" placeholder="Enter Aadhar-card Number"
                                        class="form-control col-8" pattern="[0-9]{12}">
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-danger btn-block" type="submit" name="dob2"> Register
                                    </button>
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

                    $con = mysqli_connect("localhost","root","","start");
                    // if($con){
                    //  echo "con";
                    // }else
                    // {
                    //  echo "not";
                    // }


                    $data = $_SESSION["Emp_data"];
                    $_SESSION["emp_id"]=$data["login_Referance_id"];

                    


                    $name=$_REQUEST['fname'];
                    $lname=$_REQUEST['lname'];
                    $gender=$_REQUEST['gender'];
                    $email = $_REQUEST['email'];    
                    $password=$_REQUEST['pass'];
                    $repeat_password=$_REQUEST['repass'];
                    $contact=$_REQUEST['phno'];
                    $DOB=$_REQUEST['dob'];
                    $aadhar=$_REQUEST['aadhar'];

                
                    $sq =  "SELECT `emp_reg_email` FROM `tbl_employee_registration` WHERE `emp_reg_email` = '$email'";

                    $value = mysqli_query($con,$sq);
                    $demail = mysqli_fetch_assoc($value);   

                                //echo $demail['cust_reg_email'];
                                $uemail = $demail['emp_reg_email'];                    
                    

                             if($uemail==$email){
                                        echo "<script>alert('User exist already');</script>";
                                }
                                else{

                                        if($password==$repeat_password)
                                        {

                                        //echo "User not exist";
                                        $q = "INSERT INTO `tbl_employee_registration`(`emp_reg_id`, `emp_reg_first_name`, `emp_reg_last_name`, `emp_reg_gender`, `emp_reg_email`, `emp_reg_password`, `emp_reg_contact_num`, `emp_reg_DOB`, `emp_aadharcard_number`) VALUES ('','$name','$lname','$gender','$email','$password','$contact','$DOB','$aadhar')";

                                        $res = mysqli_query($con,$q);
                                         

                                                if($res) 
                                                {

                                                    $msg = "Hey $name $lname ,

                                                    From now on You're ready to login into your Toll Account and Modify your account.
                                                    With this Account You can access your account for toll receipt and pass management..
                                                    ";
                                                    //recipient email here
                                                    $rec = "$email";
                                                    //send 
                                                    $sub="Registration Confirmation";
                                                    
                                                    if(mail($rec,$sub,$msg)){
                                                        echo "Send";
                                                    }else{
                                                        echo "not";
                                                    }
                                                    
                        
                        
                                                    // echo "Registered";

                                                    header('location: final_login.php');
                                                }
                                                else
                                                {
                                                    echo "Error ";
                                                }
                                        }
                                        if($password!=$repeat_password){
                                            echo "<script>alert('password not match');</script>";
                                        }

                                        

                    
                            ob_flush();
                }}
?>