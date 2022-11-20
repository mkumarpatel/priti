<?php 
include 'connection.php';

$sel="SELECT * FROM `faq`";
$exe=mysqli_query($conn,$sel);   
?>

<?php include 'header.php' ?>
<?php include 'siderbar_menu.php'?>
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Priti</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">FAQ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">FAQ</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">FAQ</h5>
                            <div class="accordion" id="accordionExample d-flex">
                                <?php
                                while($fetch=mysqli_fetch_assoc($exe)){
                                    ?>
                                   
                            <div class="faqitems mb-3">
                              <div class="faqqus border">
                                <span><strong class="me-2"><?php echo $fetch['faq_id']?></strong><?php echo $fetch['question'] ?><i class="fa-solid fa-plus"></i></span>

                           </div>

                           <div class="faqans border">
                               <p><?php echo $fetch['answer'] ?></p>
                           </div>
                           
                       </div>
                        
                       <?php
                   }
                   ?>
                   </div>
               </div> <!-- end card -->
           </div>
           <!-- end col -->
       </div>





   </div>   
</div> 
</div>

<?php include 'footer.php' ?>