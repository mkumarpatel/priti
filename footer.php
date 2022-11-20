<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	 <section class="footer pt-3" style="background: #FFF5EE;">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-lg-3 col-12 d-lg-flex justify-content-center  d-md-block">
	 				<div class="footer_menu">
	 					 <h3 class="text">Site Links</h3>
	 					<ul>
	 						<li><a href="product.php">Auctions</a></li>
	 						<li>PritiAuction Reviews</li>
	 						<li>PritiAuction Is Legit</li>
	 						<li>Press</li>
	 						<li><a href="login.php">Log In</a></li>
	 						<li><a href="ragister.php">Create Account</a></li>
	 					</ul>
	 				</div>
	 			</div>
	 			<div class="col-lg-3 col-12 d-lg-flex justify-content-center">
	 				<div class="footer_menu">
	 					<h3>Help</h3>
	 					<ul>
	 						<li>How To Bid an Auction</li>
	 						<li>Tips & Tricks</li>
	 						<li>Frequently Asked Questions</li>
	 						<li>What Is a Bid Pack?</li>
	 						<li>What Is "Time As Highest Bidder?"</li>
	 						<li>Promtions</li>
	 						<li>Orders & Shipping</li>
	 						<li>Payments</li>
	 						<li>House Rules</li>
	 						<li>Royalty Program</li>

	 					</ul>
	 				</div>
	 			</div>
	 			<div class="col-lg-3 col-12 d-lg-flex justify-content-center">
	 				<div class="footer_menu">
	 					 <h3>About</h3>
	 					<ul>
	 						<li>Career</li>
	 						<li>Our Team</li>
	 						<li>Suppliers</li>
	 						<li><a href="about.php">About Us</a></li>
	 						<li>Terms Of Use</li>
	 						<li>Privacy Policy</li>
	 						<li>Accessibility</li>
	 						<li></li>
	 					</ul>
	 				</div>
	 			</div>
	 			<div class="col-lg-3 col-12 d-lg-flex justify-content-center  ">
	 				<?php 
                    include 'connection.php';
        
                        $sel="SELECT * FROM `contact`";
                        $exe=mysqli_query($conn,$sel);
                        $fetch=mysqli_fetch_assoc($exe);
                    ?>
	 				<div class="footer_menu">
	 				<h3>Let's Talk</h3>
	 				 <ul>
	 					<li><?php echo $fetch['number'] ?></li>
	 				 	<li><?php echo $fetch['email'] ?></li>
	 				 </ul>
	 				 <h3>Find Us</h3>
	 				  <ul>
	 				 <li><?php echo $fetch['address'] ?></li>
	 				  </ul>
	 			</div>
	 		</div>
	 		</div>
	 	</div>
	 </section>
	  <section class="copyright">
	  	<div class="container py-2">
	 	<div class="row">
	 		<div class="col-lg-6 col-12">
	 		<div class="text-left">
	 			<span class="text-white">PritiAuction - All Rights Reseverd</span>
	 		</div>
	 	</div>
	 	   <div class="col-lg-6 col-12 d-lg-flex justify-content-end">
	 	   	  <img class="w-50" src="images/Group 869.png">
	 	</div>
	 </div>
	</div>
	</section>
</body>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
  <script type="text/javascript" src="js/script.js"></script>
</html>