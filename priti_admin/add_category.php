  <?php
  include 'connection.php';
  error_reporting(0);
$edit=$_GET['edit'];
if($edit==""){
  if(isset($_POST['save'])){
   $image=$_FILES['cat_img'];
   $image_name=$image['name'];
   $tmpName=$image['tmp_name'];
   $path="../gallery_upload/".$image_name;
   move_uploaded_file($tmpName, $path);

   $cat_name=$_POST['cat_name'];
   $cat_des=$_POST['editor'];
   $cat_status=$_POST['radioInline'];

   $ins="INSERT INTO `category`(`category_name`,`category_des`,`category_img`,`category_status` )VALUES('$cat_name','$cat_des','$image_name','$cat_status')";
   mysqli_query($conn,$ins);
   header('location:view_category.php');

}

}
else
{
    $sel="SELECT * FROM `category` WHERE `category_id`='$edit'";
    $exe=mysqli_query($conn,$sel);
    if($row=mysqli_fetch_assoc($exe)){

        if(isset($_POST['save'])){
           $image=$_FILES['cat_img'];
           $image_name=$image['name'];
           $tmpName=$image['tmp_name'];
           $path="../gallery_upload/".$image_name;
           move_uploaded_file($tmpName, $path);

           $cat_name=$_POST['cat_name'];
           $cat_des=$_POST['editor'];
           $cat_status=$_POST['radioInline'];

           
           $upd = "UPDATE `category` SET `category_name`='$cat_name',`category_des`='$cat_des',`category_img`='$image_name',`category_status`='$cat_status'WHERE `category_id`='$edit'";

           mysqli_query($conn,$upd);
        header('location:view_category.php');


       }




   }else{
      mysqli_error($conn);
  }
}

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
                                <li class="breadcrumb-item active">Add / Edit Category</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add / Edit Category</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


            <div class="row">
                <div class="col-12">
                    <form method="post" enctype="multipart/form-data" onsubmit="return getEditor()">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Category</h5>

                                <div class="mb-3 ">
                                    <label for="Category-name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <input type="text" name="cat_name"  id="product-name" class="form-control" 
                                          value="<?php echo $row['category_name'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="Category-description" class="form-label">Category Description <span class="text-danger">*</span></label>
                                    <div id="snow-editor"  style="height: 150px; width: 100%; outline: none;" ></div> <!-- end Snow-editor-->
                                    <input id="snow-editor-in" type="hidden" name="editor" value="<?php echo $row['category_des'] ?>" >
                                </div>
                            </div>
                        </div> <!-- end card -->
                        <!-- </div> end col -->

                        <!-- <div class="col-lg-12"> -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Category Images</h5>

                                    <input type="file" name="cat_img" data-plugins="dropify" data-height="200" />
                                    <img  src="../gallery_upload/<?php echo $row['category_img'] ?>" height="150px">
                                    <input type="hidden" name="old_images" value="<?php echo $row['category_img']; ?>">
                                    
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                 <!-- end col-->
                                 <div class="mb-3">
                                    <label class="mb-2"> Category Status <span class="text-danger">*</span></label>
                                    <br/>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" value="<?php echo $row['category_status'] ?>" name="radioInline" value="1" id="inlineRadio1" checked>
                                            <label class="form-check-label" for="inlineRadio1">Online</label>
                                        </div>
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" value="<?php echo $row['category_status'] ?>" name="radioInline" value="2" id="inlineRadio2">
                                            <label class="form-check-label" for="inlineRadio2">Offline</label>
                                        </div>
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" value="<?php echo $row['category_status'] ?>" name="radioInline" value="0" id="inlineRadio3">
                                            <label class="form-check-label" for="inlineRadio3">Draft</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- end card -->
                            </div>
                        </div>
                        <!-- </div>  end col -->
                        <!-- end row -->

                        <!-- <div class="row">
                            <div class="col-12"> -->
                                <div class="text-center mb-3">
                                    <button type="submit" name="save" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                    
                                </div>
                            </form>
                        </div>
                    </div> <!-- end col -->
                    <!-- </div> -->
                    <!-- end row -->


                    <!-- file preview template -->
                    

                </div>   
            </div> 
        </div>

        <?php include 'footer.php' ?>

        <script type="text/javascript">

            function getEditor() {
             $('#snow-editor-in').val($('#snow-editor').html());
         }

     </script>


