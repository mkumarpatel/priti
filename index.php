 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Priti</title>
     
</head>
<body>
   <?php include 'header.php' ?>
      <div class="container-fluid"style="background: linear-gradient(106.12deg, #683D22 23.27%, #42230F 87.09%);">
   	   <div class="container">
   	   	<div class="row justify-content-between">
   	   	   <div class="col-lg-2 d-none d-lg-block col-sm-none mt-2 p-2 position-relative">
   	   	   	<div class="left_box  text-center">
   	   	   		<div class="boxinner p-3">
   	   	   			<img src="images/Vector.png">
   	   	   		</div>
   	   	   		 <span class="text">120 Year</span>
   	   	   	</div>
   	   	   </div>
   	   	   <div class="col-lg-8 text-center py-5 ">
   	   	   	<div class="content">
                     <h1 class="hedding  fs-1" style="color:#FFFFFF;">World's Biggest<br><span style="color: #D49D7B;">auction platform</span></h1>
                     <p class="" style="font-size: 20px; color: #FFFFFF;">We Bring the Showroom to you</p>
                  </div>
                     <button class="disover_btn border-none">Disover Now</button>
   	   	   </div>
   	   	   <div class="col-lg-2 d-none d-lg-block col-sm-none mt-2 p-2">
   	   	   	<div class="right_box text-center">
   	   	   		<div class="boxinner"></div>
   	   	   		<span class="text">12Bid So Far</span>
   	   	   	</div>
   	   	   </div>
   	   	</div>
   	   	<div class="row d-lg-none col-sm-block">
   	   		<div class="col-6">
   	   			<div class="right_box text-center">
   	   	   		<div class="boxinner p-3">
   	   	   			<img src="images/Vector.png">
                     </div>
   	   	   		<span class="text">120 Year</span>
   	   	   	</div>
   	   		</div>
   	   		<div class="col-6">
   	   			<div class="right_box text-center">
   	   	   		<div class="boxinner"></div>
   	   	   		<span class="text">12Bid So Far</span>
   	   	   	</div>
   	   		</div>
   	   	</div>
   	   	<div class="row py-3 mb-3 d-flex justify-content-between ">
   	   		<div class="col-6 col-sm-6 col-sm-6 ">
   	   			<div class="bottom_box1  m-auto w-sm-100 ">
                     <img src="images/Rectangle8.png">
   	   			</div>
   	   		</div>
   	   		 <div class="col-6 col-sm-6 mb-3  ">
   	   			<div class="bottom_box1 ms-auto me-3">
                      <img src="images/Rectangle 7.png">
   	   			</div>
   	   		 </div>
   	   		 	  
   	   	</div>
   	   </div>
      </div>
      <div class="container text-center location_info ">
       	<div class="row  m-auto py-3 info_daitels ">
            <div class="col-lg col-md col-12 w-100">
               <div class="row1">
                   <h6>Location</h6>
                   <span>Norway <i class="fa-solid fa-angle-down"></i></span> 
               </div>
            </div>   
          <div class="col-lg col-md col-12 w-100">
               <div class="row1 text-center d-flex justify-content-between">
                  <div class="left_border "></div>
                  <div class="right_content">
                   <h6 class="text-start">Year</h6>
                   <span>793 AD <i class="fa-solid fa-angle-down"></i></span>
                   </div> 
               </div>
          </div>   
          <div class="col-lg col-md col-12 w-100">
               <div class="row1 text-center d-flex justify-content-between">
                  <div class="left_border"></div>
                  <div class="right_content text-center">
                     <h6 class="text-start">Religion</h6>
                     <span>Lutheranism <i class="fa-solid fa-angle-down"></i></span>
                  </div> 
               </div>
          </div>   
          <div class="col-lg col-md col-12 w-100">
              <div class="row1 text-center d-flex justify-content-between">
                  <div class="left_border"></div>
                  <div class="right_content">
                     <h6 class="text-start">Type</h6>
                     <span>Weapons <i class="fa-solid fa-angle-down"></i></span>
                  </div> 
               </div>
            </div>   
       	   <div class="col-lg col-md col-12 w-100">
               <div class="row1">
                  <button><i class="fa-solid fa-magnifying-glass-minus"></i>Search</button>
               </div> 
            </div>	
       	</div>
      </div>

      <div class="container explore  mt-5">
         <div class="row text-center">
            <div class="col-12 mt-5">
               <img src="images/Rectangle 12.png">
            </div>
            <div class="col-12">   
                <span class="text">Explore Auctions</span>
            </div>
         </div>
      </div>
      <div class="container py-5">
         <div class="row">
            <div class="col-9 our_heading">
               <h3>Our Auction Collections:</h3>
            </div>
            <div class="col-3 our_heading text-end">
               <a href="#">View all</a>
            </div>
         </div>
         <div class="row text-center">
            <?php 
              include 'connection.php';
              $sql="SELECT * FROM category";
               $result=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_assoc($result)){
                 
             ?>
            <div class="col-lg col-6 col-md">
               <div class=" our_product py-5  border">
                  <img src="gallery_upload/<?php echo $row['category_img']; ?>">
               </div>  
                  <span class="our_title"><?php echo $row['category_name'] ?></span>            
            </div>
             <?php
                }
             }
             ?>
            
         </div>
      </div>
      <div class="container-fluid">
         <div class="container py-5 ">
             <h5 class="item-title text-center py-2">Featured Products</h5>
            <div class="row carousel ">
               <div class="owl-carousel owl-theme">
               <?php 
                  include 'connection.php';
               ?>
                  <div class="col-lg-3 w-100 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like">1</div>
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77.png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-3 w-100 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like">2</div>
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="mb-3 item-img2 " src="images/image 77 (26).png">
                           <span class="item_name text-start">Slim Dining Chair</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-3 w-100 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like">3</div>
                        </div>
                        <div class="item-img  py-3">
                           <img class="item-img3 w-75 mb-3 " src="images/image 77 (27).png">
                           <span class="item_name text-start">Ottoman for Loft Sofa</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-3 w-100 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like">4</div>
                        </div>
                        <div class="item-img  py-3">
                           <img class="item-img4 w-75 mb-3 " src="images/image_77__3_-removebg-preview.png">
                           <span class="item_name text-start">Arne Dining Chair</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-3 w-100 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like">5</div>
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image_77-removebg-preview.png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-3 w-100 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like">6</div>
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="item-img2 mb-3 " src="images/image 77 (26).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid ">
         <div class="container">
            <div class="row">
                 <div class="col-lg-3 col-md-6 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like">1</div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (4).png">
                           <span class="item_name text-start">White Oak Nagstand</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like">1</div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class=" w-50 mb-3 " src="images/image 77 (5).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like">1</div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (6).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like">1</div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (7).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div> 
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
               </div>
                  <div class=" w-100 text-center py-3">
                     <button class="more-btn py-2 px-5">Lead More</button>
                  </div>
         </div>
      </div>
      <div class="container-fluid my-5">
         <div class="container">
            <div class="row middle_banner text-center">
               <div class="col-lg-4">
                  <div class="w-75"><img class="w-100" src="images/pngegg 1.png"></div>
               </div>
               <div class="col-lg-4 py-5">
                  <div class=" py-5">
                   <h4 class="fs-2 fw-bold text-white">Auctions starting right now 50% off</h4>
                   <button class="px-4 py-1 mt-3 border-0 bg-white fs-4 " style="color: #492712;">Disover Now</button>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="text-center w-100"><img class="w-100" src="images/pngegg (1) 1.png"></div>
               </div>
            </div>      
         </div>
      </div>
      <div class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="text-center card_title py-4">
                  <h5>How it work?</h5>
               </div>
               <div class="col-lg-4 px-lg-5">
                  <div class="Vector_card">
                     <div class="row text-center">

                        <div class="col-6 pt-3">
                           <img src="images/Vector.png">
                        </div>
                        <div class="col-6 pt-3">
                           <img class="w-25" src="images/01.png">
                        </div>
                     </div>
                     <div class="text-left ps-5">
                       <h4 class="fs-5">Browse our catalog</h4>
                       <p>Sit lectus eleifend id consectetur <br>amet a. Etiam sed urna lacus sed dolor<br> vivamus viverra ege1.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 px-lg-5">
                  <div class="Vector_card">
                     <div class="row text-center">
                        <div class="col-6 pt-3">
                           <img src="images/Vector.png">
                        </div>
                        <div class="col-6 pt-3">
                           <img class="w-25" src="images/02.png">
                        </div>
                     </div>
                     <div class="text-left ps-5">
                       <h4 class="fs-5">Browse our catalog</h4>
                       <p>Sit lectus eleifend id consectetur <br>amet a. Etiam sed urna lacus sed dolor<br> vivamus viverra ege1.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 px-lg-5">
                  <div class="Vector_card">
                     <div class="row text-center">
                        <div class="col-6 pt-3">
                           <img src="images/Vector.png">
                        </div>
                        <div class="col-6 pt-3">
                           <img class="w-25" src="images/03.png">
                        </div>
                     </div>
                     <div class="text-left ps-5">
                       <h4 class="fs-5">Browse our catalog</h4>
                       <p>Sit lectus eleifend id consectetur <br>amet a. Etiam sed urna lacus sed dolor<br> vivamus viverra ege1.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="container py-5">
            <div class="text-center card_title py-4">
               <h5>Special Products</h5>
            </div>
            <div class="row">
               <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like">1</div>
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (4).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
               <div class="col-lg-3 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (9).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (10).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-3 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (12).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row py-5">
                  <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (13).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
                   <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like"></div>
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (14).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
                   <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="li ke"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (15).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
                    <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (16).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 mt-3 border festivel_product "style="background: #E8DBD4; ">
                  <div class="row pt-3 px-3">
                     <div class="col-6 festivel_content">
                        <h2 >Best Colorfull Lump</h2>
                        <p>Festivel season is here</p>
                        <button class="py-1 px-5 border-none festivel_button">Shop Now</button>
                     </div>
                     <div class="col-6">
                        <img class="w-100" src="images/image_77__28_-removebg-preview.png">
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mt-3  festivel_product"style="background: #FFF4EE; ">
                  <div class="row pt-3 px-3">
                     <div class="col-6 festivel_content">
                        <h2>Comfortable Chair</h2>
                        <p>Festivel season is here</p>
                        <button class="py-1 px-5 border-none festivel_button">Shop Now</button>
                     </div>
                     <div class="col-6">
                        <img class="w-100" src="images/image_83-removebg-preview.png">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="container py-5">
            <div class="text-center card_title py-4">
               <h5>Upcoming Auction</h5>
            </div>
            <div class="row">
               <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (18).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
               <div class="col-lg-3 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (19).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like"></div>
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (20).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-3 px-lg-3">
                     <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (21).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row py-5">
                  <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (22).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
                   <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (23).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
                   <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <div class="like"></div>
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (24).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
                    <div class="col-lg-3 px-lg-3">
                  <div class="item  w-100 px-4 py-3">
                        <div class="item_det d-flex justify-content-between">
                           <div class="discount">60%OFF</div>
                           <!-- <div class="like"></div> -->
                        </div>
                        <div class="item-img w-100 py-3">
                           <img class="w-75 mb-3 " src="images/image 77 (25).png">
                           <span class="item_name text-start">Modern Storage</span>
                        </div>
                        <div class="item_sale d-flex justify-content-between">
                           <div class="item_time pb-2">00:00:00</div>
                           <div class="item_rent mt-2">$2.99</div>
                        </div>
                        <div class="w-100 mb-3">
                          <button class="item-btn">Bid Now</button>
                        </div>
                        <div class="item_bay text-center pt-2">
                            <span class="">Bay it Now For $99</span>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
      <?php include 'footer.php' ?>
</body>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

</html>