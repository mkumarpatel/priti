<!DOCTYPE html>
<?php 
 $title =''
include 'connection.php';

$sel="SELECT * FROM `faq`";
$exe=mysqli_query($conn,$sel);   
?>

<?php include 'header.php' ?>
<div class="main_menu text-center w-100 py-4">
   <h5 class="text-white fw-bold fs-4">Help</h5>
</div>
<div class="container-fluid">
  <div class="container"> 
     <div class="row">
        <div class="col-12 py-5">
         <h3 class="text-center">Frequently Asked Questions</h3>

         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     </div>
     <?php while ($fetch=mysqli_fetch_assoc($exe)) { ?>
     <div class="faqitems">
      <div class="faqqus">
         <span><?php echo $fetch['question'] ?><i class="fa-solid fa-plus"></i></span>
      </div>
      <div class="faqans">
         <p> <?php echo $fetch['answer'] ?></p>
      </div>
   </div>
   <?php
      }
       ?>

   <div class="form_area m-auto my-5 p-4">
    <h4 class="">Send Use a Messege</h4>
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
</div> 
</div>
<?php include 'footer.php' ?>
