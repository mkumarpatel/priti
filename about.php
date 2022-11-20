<?php 
   include 'connection.php';
   $sel="SELECT * FROM about";
   $exe=mysqli_query($conn,$sel);
   $fetch=mysqli_fetch_assoc($exe);
?>
    <?php include 'header.php' ?>
        <div class="main_menu text-center w-100 py-4">
            <h5 class="text-white fw-bold fs-4">About Us</h5>
        </div>
       <div class="container-fluid">
       	  <div class="container"> 
       	  	  <div class="row py-5">
                  <div class="col-lg-6">
                    <div class="w-75 ms-auto">
                      <img class="w-100" src="gallery_upload/<?php echo $fetch['image'] ?>">
                    </div>
                  </div>
       	  	  	  <div class="col-lg-6 text-start">
                    <div class="article w-75">
                        <p><?php echo $fetch['description'] ?></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        </p>
                    </div>  
                  </div>
                </div>
            </div>
       </div>
    <?php include 'footer.php' ?>
