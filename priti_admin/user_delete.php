<?php 
include 'connection.php';

if($_SERVER['REQUEST_METHOD']=='GET'){
     $delete_id=$_GET['id'];
     $del="DELETE FROM `customer` WHERE `customer_id`='$delete_id'";
     $result=mysqli_query($conn,$del);
     if($result){
       echo "Delet Sucessfully";
     }else{
         echo "Not Deleted !!";
     }

}
     else if($_SERVER['REQUEST_METHOD']=='POST'){

     $id=$_POST['id'];
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $date=$_POST['date'];
     $pin=$_POST['pin'];
     $address=$_POST['address'];


     $upd = "UPDATE `customer` SET `cust_name`='$name',`cust_email`='$email',`cust_phone`='$phone',`date`='$date',`cust_pin`='$pin',`address`='$address' WHERE `customer_id`='$id'";
     if (mysqli_query($conn, $upd )) {
          echo 'data update succesfully';
     } 
     else {
          echo 'data not updating !!';
     }
     mysqli_close($conn);

}else{
     echo "Data Not Found"; 
}


?>