<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Priti</title>
    <?php
      include 'connection.php';
      if(isset($_POST['login'])){
        $name=$_POST['user'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="SELECT * FROM `customer` WHERE `cust_name`='$name' AND `cust_email`='$email' AND `cust_password`='$password'";
        $result=mysqli_query($conn,$sql)or die('query faild');
        $exe=mysqli_num_rows($result);
        if($exe==1){
            $_SESSION['userName']=$name;
            $_SESSION['userEmail']=$email;
            $_SESSION['userPass']=$password;
            header("location:index.php");
        }else{
            ?>
               <script>alert('Email and Password Invalid...');</script>
            <?php
        }
      }
    ?>
</head>
<body>
    <?php include 'header.php' ?>
       <div class="container-fluid">
       	  <div class="container"> 
       	  	  <div class="row">
       	  	  	  <div class="col-12 py-5">
       	  	  	  	<div class="form_area w-75 m-auto p-5">
       	  	  	  		     <h3 class="text-center">Login Account</h3>
       	  	  	  		<form method="post">
       	  	  	  			<div class="form_group mt-4">
       	  	  	  				<!-- <label>Name</label> -->
       	  	  	  				<input class="w-100 border-0 border-bottom " type="text" name="user" placeholder="Username*">
       	  	  	  			</div>
       	  	  	  			<div class="form_group mt-4">
       	  	  	  				<!-- <label>Password</label> -->
       	  	  	  				<input class="w-100 border-0 border-bottom" type="email" name="email" placeholder="Email Address*">
       	  	  	  			</div>
       	  	  	  			<div class="form_group mt-4">
       	  	  	  				<!-- <label>Confirm Password</label> -->
       	  	  	  				<input class="w-100 border-0 border-bottom" type="Password" name="password" placeholder="Confirm Password*">
       	  	  	  			</div>
       	  	  	  			 <div class="py-3"><a href="#">Forget Password?</a></div>
                            <div class=" text-center">
                            	<button type="submit" class="w-50 rounded-5 py-2 my-4 text-white btn_log border-0"name="login">login</button>
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