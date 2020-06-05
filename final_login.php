<?php
    ob_start();
    session_start();
?>
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

<body class="" background="assets/img/a1.jpg" style="background-size: 100%">
    <div class="account-pages mt-5 mb-5">/
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4" style="border-style: solid" ;>


                            <center>
                                <h3 class="auth-title">Sign In</h3>
                            </center>
                            <br>

                            <form action="#">

                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" name="email" required=""
                                        placeholder="Enter your email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="pass" required="" id="password"
                                        placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox checkbox-info">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" ass>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-danger btn-block" type="submit" name="sub1"> Log In </button>
                                </div>

                            </form><br>

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p> <a href="forget.php" class="text-muted ml-1">Forgot your password?</a>
                                    </p>
                                    <p class="text-muted">Don't have an account? <a href="main.php" class=""
                                            ss="text-muted ml-1"><b class="font-weight-semibold">Sign Up</b></a></p>
                                </div> <!-- end col -->
                            </div>
                            <br><br>
                            <?php
    if(isset($_REQUEST['sub1']))
    {

        // if(empty($_REQUEST['email']) || empty($_REQUEST['pass'])){
        //  $error="Email-id and Password Invalid";
        // }
        // else{
            $con = mysqli_connect("localhost","root","","start");

    //session_start();  
    // if($con == TRUE)
    // {
    //  echo "con";
    // }
    // else
    // {
    //  echo "not Con";
    // }
            //session_start();

                    $email=$_REQUEST['email'];
                    $password=$_REQUEST['pass'];
                    

                $q = "SELECT * FROM `tbl_login` WHERE `login_email`='$email' AND `login_password`='$password'";
                $res = mysqli_query($con,$q); 
                 
                $data = mysqli_fetch_assoc($res);       
                
                $row = mysqli_num_rows($res);

                if($row>0){
                    $_SESSION["email"]=$email;
                }   

                if($row == 1){
                    $type=$data["login_type_of_user"];
                }


                if($row == 1){
                    if($type == "CU"){
                        header("location: Customer.php");

                    }elseif($type == "EM"){
                        $_SESSION["Emp_data"]=$data;   
                        header("location: emp_dash.php");
                    }
                    elseif($type == "AD"){
                        header('location: Admin1.php');
                         // echo "<script>alert('ADMIN LOGIN')</script>";   
                    }
            }else{
                    echo "<center><h5>Invalid Email-id & Password</h5></center>";   
            }

                // if(isset($did))
                // {    
                //  header('location: index3.php');

                //  //header('location: welcome.php');
                    
                //$_SESSION['user_email']=$email;
                // }
                // else if(!isset($did))
                // {
                //  echo "<center><h3>Invalid Email-id & Password</h3></center>";
                //  //echo "Error :".$sql;
                // }


                //  $q=mysqli_query($con,"SELECT `cust_reg_id` FROM `tbl_customer_registration` WHERE `cust_reg_email`='$email' `cust_reg_password`='$password'");

                //  $row=mysqli_num_rows($q);

                //  if($row==1){
                //      header("location: index3.php");
                //  }
                //  else{
                //      $error="Invalid Email-id & Password";
                //  }

                // }

                    
                        // $message="";
                        // if(count($_POST)>0) {
                        //  $result = mysqli_query($con,"SELECT * FROM tbl_customer_registration WHERE `cust_reg_email`='" . $_POST["email"] . "' and `cust_reg_password` = '". $_POST["pass"]."'");
                        //  $count  = mysqli_num_rows($result);
                        //  if($count==0) {
                        //      $message = "Invalid Username or Password!";
                        //  } else {
                        //      header("location: index3.php");
                        //  }
                    
                ob_flush();
        }
    
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