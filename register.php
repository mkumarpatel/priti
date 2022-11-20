        <?php
         $title='';
      include('connection.php');
        if(isset($_POST['submit'])){
            $username=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $date=$_POST['date'];
            $pin=$_POST['pincode'];
            $address=$_POST['address'];
            $password=md5($_POST['password']);
            $cpassword=md5($_POST['cpassword']);

             if(!validate($username) && !validate($phone) && !validate($email) && !validate($date) && !validate($pin) && !validate($address) && !validate($password)){
                $exitsEmail="SELECT `cust_name`,`cust_email`,`cust_password` FROM `customer` WHERE `cust_name`='$username'AND `cust_email`='$email' AND `cust_password`='$password'";
                $result=mysqli_query($conn,$exitsEmail)or die('Query Faild');
                if(mysqli_num_rows($result)>0){
                    ?>
                         <script>
                             alert('Email Already Exits, Please continue with another email');
                         </script>
                    <?php
            }else{
                 if($password===$cpassword){
                     $ins="INSERT INTO `customer`(`cust_name`,`cust_phone`,`cust_email`,`date`,`cust_pin`,`address`,
                        `cust_password`)VALUES('$username','$phone','$email','$date','$pin','$address','$password')";
                      $result=mysqli_query($conn,$ins)or die('Insert Query Faild');
                    if($result){
                        // session_start();
                        //  
                        ?>
                            <script>
                                alert('Registration Successfully');
                                window.location="login.php";
                            </script>
                        <?php

                    }else{
                        ?>
                            <script> alert('Registration not successfully');</script>
                        <?php
                    }
                }else{
                    ?>
                       <script>
                           alert('Password And Confirm Password no match');
                       </script>
                    <?php
                 }

            }
           }
         }
        

        function validate($field){
            if(empty($field)){
                ?>
                 <script> alert('Please Check Your Fields');</script>
                <?php
                return true;
            }else{
                return false;
            }
        }
    ?>
</head>
<body>
    <?php include 'header.php' ?>

       <div class="container-fluid">
             <div class="main_menu text-center">
                  <h5>Contect</h5>
             </div>
       	  <div class="container"> 
       	  	  <div class="row">
       	  	  	  <div class="col-12 py-5">
       	  	  	  	<div class="form_area w-75 m-auto p-5">
       	  	  	  		     <h3 class="text-center">Register Account</h3>
                             <p class="text-center">Get For Free Priti Account Now</p>
       	  	  	  		<form method="post">
       	  	  	  			<div class="form_group mt-4">
       	  	  	  				<!-- <label>Name</label> -->
       	  	  	  				<input class="w-100 border-0 border-bottom " type="text" name="name" placeholder="Username*">
                                <span class="error"></span>
       	  	  	  			</div>
       	  	  	  			<div class="form_group mt-4">
                                <!-- <label>Password</label> -->
                                <input class="w-100 border-0 border-bottom" type="number" name="phone" placeholder="phone no.*">
                            </div>
                            <div class="form_group mt-4">
                                <!-- <label>Password</label> -->
                                <input class="w-100 border-0 border-bottom" type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="form_group mt-4">
                                <!-- <label>Password</label> -->
                                <input class="w-100 border-0 border-bottom" type="date" name="date" placeholder="date*">
                            </div>
                            <div class="form_group mt-4">
                                <!-- <label>Password</label> -->
                                <input class="w-100 border-0 border-bottom" type="number" name="pincode" placeholder="Pincode*">
                            </div>
                            <div class="form_group mt-4">
                                <!-- <label>Password</label> -->
                                <input class="w-100 border-0 border-bottom" type="text" name="address" placeholder="Address*">
                            </div>
                            <div class="form_group mt-4">
                                <!-- <label>Password</label> -->
                                <input class="w-100 border-0 border-bottom" type="password" name="password" placeholder="Password*">
                            </div>
       	  	  	  			<div class="form_group mt-4">
       	  	  	  				<!-- <label>Confirm Password</label> -->
       	  	  	  				<input class="w-100 border-0 border-bottom" type="password" name="cpassword" placeholder="Confirm Password*">
       	  	  	  			</div>
                            <div class=" text-center">
                            	<button type="submit" class="w-50 rounded-5 py-2 my-4 text-white btn_log border-0" name="submit">Register</button>
                            </div>
       	  	  	  		</form>
       	  	  	  	</div>
       	  	  	  </div>
       	  	  </div>
       	  </div> 
       </div>
    <?php include 'footer.php' ?>
</body>
</html>