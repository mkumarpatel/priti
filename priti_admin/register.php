<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Priti</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="assets/js/head.js"></script>


        <?php 
            $conn=mysqli_connect("localhost","root","","priti");
            if(isset($_POST['signup'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];
       
               if(!validate($name) && !validate($email) && !validate($password)){
               
                   $exitsEmail="SELECT `user_email`,`user_name` FROM `users` WHERE `user_email`='$email' AND `user_name`='$name'";
                   $result=mysqli_query($conn,$exitsEmail)or die('Select Query Faild');
                   $exe=mysqli_num_rows($result);  
   
                    if($exe>0){
                        ?>
                            <script>
                                alert('Email Already Exits, Please continue with another email');
                            </script>
                        <?php
          
          
                    }else{
                        if($password==$cpassword){
                            $insQuery="INSERT INTO `users`(`user_name`,`user_email`,`user_password`)VALUES('$name','$email','$password')";       
                            $result=mysqli_query($conn,$insQuery)or die('Query insert faild');          
       
                            if($result){
                                session_start();
                                $_SESSION['user_name']=$name;
                                $_SESSION['user_email']=$email;
                                $_SESSION['user_password']=$password;
                                    ?>
                                        <script>
                                            alert('Data submit');
                                            window.location = 'login.php'; 
                                        </script>
       
                                    <?php
                            }else{
                                ?>
                                    <script>
                                        alert('data not submit');
                                    </script>
                                <?php
                            }
       
                            }else{
                                ?>
                                    <script>
                                        alert('Password And Confirm Password No Match');
                                    </script>
                                <?php
                        }
                    }
                }
            }




     
     function validate($field){
        if(empty($field)){

             ?>
                <script type="text/javascript">
                    alert('check your field');
                </script>
             <?php
             return true;
        }else{
           return false;
        }
     }

    ?>

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="register.php.php" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="../images/logo.png" alt="" height="35">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="../images/logo.png" alt="" height="35">
                                            </span>
                                        </a>
                                    </div>
                                    
                                </div>

                                <form action="#" method="post">

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input class="form-control" type="text" name="name" id="fullname" placeholder="Enter your name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Phone No</label>
                                        <input class="form-control" type="tel:7073689209" name="phone" id="emailaddress" required placeholder="Enter your Phone Number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Date</label>
                                        <input class="form-control" type="date" name="date" id="emailaddress" required placeholder="Enter your Date">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label"> Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="cpassword" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="text-center d-grid">
                                        <button class="btn btn-success" name="signup" type="submit"> Sign Up </button>
                                    </div>

                                </form>

                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign up using</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Already have account?  <a href="login.php" class="text-white ms-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
    
</html>