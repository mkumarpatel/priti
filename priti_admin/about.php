 <?php
   include 'connection.php';
   if(isset($_POST['upload'])){
      $name=$_POST['name'];
      $des=$_POST['editor'];
      $images=$_FILES['image'];
      $image_name=$images['name'];
      $tmpName=$images['tmp_name'];
      $path="../gallery_upload/".$image_name;
       move_uploaded_file($tmpName, $path);
       $status=$_POST['radioInline'];


       $ins="INSERT INTO `about`(`name`,`description`,`image`)VALUES('$name','$des','$image_name')";
        mysqli_query($conn,$ins);

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
                                            <li class="breadcrumb-item active">About Us</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">About Us</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Abouts</h5>

                                        <div class="mb-3">
                                            <label for="product-name" class="form-label"> Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name"  class="form-control" placeholder="">
                                        </div>

                                          <div class="mb-3">
                                            <label for="product-description" class="form-label">Category Description <span class="text-danger">*</span></label>
                                            <textarea id="snow-editor" name="editor" style="height: 150px; width:100%;">
                                            </textarea> <!-- end Snow-editor-->
                                        </div>


                                        

                                        
                                    </div>
                                </div> <!-- end card -->

                                
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Images</h5>
                                        <input type="file" name="image" data-plugins="dropify" data-height="200" />

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
                                                    <input class="form-check-input" type="radio" name="radioInline" value="1" id="inlineRadio1" checked>
                                                    <label class="form-check-label" for="inlineRadio1">Online</label>
                                                </div>
                                                <div class="form-check me-2">
                                                    <input class="form-check-input" type="radio" name="radioInline" value="2" id="inlineRadio2">
                                                    <label class="form-check-label" for="inlineRadio2">Offline</label>
                                                </div>
                                                <div class="form-check me-2">
                                                    <input class="form-check-input" type="radio" name="radioInline" value="0" id="inlineRadio3">
                                                    <label class="form-check-label" for="inlineRadio3">Draft</label>
                                                </div>
                                            </div>
                                        </div>

                                <!-- end card -->
                                  </div>
                              </div>
                        <!-- end row -->

                                <div class="text-center mb-3">
                                    <button name="upload" type="submit" class="btn w-sm btn-success waves-effect waves-light">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                        <!-- end row -->


                        <!-- file preview template -->
                        

                      </div>   
                    </div> 
                </div>

           <?php include 'footer.php' ?>