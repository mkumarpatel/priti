    <?php 
      $title='';
    include 'header.php' ?>
        <div class="main_menu text-center w-100 py-4">
                  <h5 class="text-white fw-bold fs-4">CONTECT US</h5>
        </div>
       <div class="container-fluid">
          <div class="container">
            <?php 
              include 'connection.php';

              $sel="SELECT * FROM `contact`";
              $exe=mysqli_query($conn,$sel);
              $fetch=mysqli_fetch_assoc($exe);
            ?>
             <div class="row text-center py-4">
                <div class="col-lg-4">
                   <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                   <span><?php echo $fetch['address'] ?></span>
                </div>
                <div class="col-lg-4">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <span><?php echo $fetch['number'] ?></span>
                </div>
                <div class="col-lg-4">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <span><?php echo $fetch['email'] ?></span>
                </div>
             </div>
          </div>
       </div>
       <div class="container-fluid">
       	   <div class="container"> 
       	  	   <div class="row py-5">
                   <div class="col-lg-6">
                       <div class="form_area m-auto p-4">
                             <h4 class="text-center">Send Use a Messege</h4>
                        <form method="post">
                            <div class="form_group mt-3">
                                <label>First Name</label>
                                <input class="w-100 " type="Password" name="name" placeholder="First name*">
                            </div>
                            <div class="form_group mt-4">
                                <label>Mobile Number</label>
                                <input class="w-100" type="Number" name="number" placeholder="Mobile Number*">
                            </div>
                            <div class="form_group mt-4">
                                <label>Email Address</label>
                                <input class="w-100" type="email" name="email" placeholder="email*">
                            </div>
                            <div class="form_group mt-4">
                                <label>Messege</label>
                                <textarea class="w-100"></textarea>
                            </div>
                            <div class="">
                                <button class="w-25 rounded-5 py-1 my-4 text-white btn_log">Send Messege</button>
                            </div>
                        </form>
                    </div>

                   </div>
                   <div class="col-lg-6">
                                            <iframe src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29023.05143314657!2d72.70325697980286!3d24.593287937544297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395d2a7b9c58c24f0x41ec48d89a772ec9!2sMountAbuRajasthan307501!5e0!3m2!1sen!2sin!4v1654414507482!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                   </div>
                </div>
            </div>
       </div>
    <?php include 'footer.php' ?>
</body>
</html>