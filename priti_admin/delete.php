<?php
  include 'connection.php';
   $cat_id=$_POST["id"];
    $sql="DELETE FROM `category` WHERE category_id='$cat_id'";
      $data=mysqli_query($conn,$sql);
      if($data){
        echo 1;
      }else{
        echo 0;
      }

   
?>