<?php
    include 'connection.php';

 if(isset($_POST['save'])){
     $image=$_FILES['image1'];
     $image_name1=$image['name'];
     $tmpName=$image['tmp_name'];
     $path="../gallery_upload/".$image_name1;
     move_uploaded_file($tmpName, $path);

     $image=$_FILES['image2'];
     $image_name2=$image['name'];
     $tmpName=$image['tmp_name'];
     $path="../gallery_upload/".$image_name2;
     move_uploaded_file($tmpName, $path);

     $image=$_FILES['image3'];
     $image_name3=$image['name'];
     $tmpName=$image['tmp_name'];
     $path="../gallery_upload/".$image_name3;
     move_uploaded_file($tmpName, $path);

     $image=$_FILES['image4'];
     $image_name4=$image['name'];
     $tmpName=$image['tmp_name'];
     $path="../gallery_upload/".$image_name4;
     move_uploaded_file($tmpName, $path);




     $name=$_POST['name'];
     $code=$_POST['time'];
     $category=$_POST['category'];
     $price=$_POST['price'];
     $des=$_POST['editor'];
     $status=$_POST['radioInline'];

    $ins="INSERT INTO `products`(`product_name`,`product_time`,`product_cat`,`product_price`,`product_des`,`product_img1`,`product_img2`,`product_img3`,`product_img4`,`product_status` )VALUES('$name','$code','$category','$price','$des','$image_name1','$image_name2','$image_name3','$image_name4','$status')";
      mysqli_query($conn,$ins);

 }
?>
<?php include 'header.php' ?>
<?php include 'siderbar_menu.php' ?>
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
                                            <li class="breadcrumb-item active">Add / Edit Product</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add / Edit Product</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Products</h5>

                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Product Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" id="product-name" class="form-control" placeholder="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-reference" class="form-label">Product Time<span class="text-danger">*</span></label>
                                            <input type="number" name="time" id="product-reference" class="form-control" placeholder="">
                                        </div>
                                            
                                        <div class="mb-3">
                                            <label for="product-category" class="form-label">Categories <span class="text-danger">*</span></label>
                                            <select name="category" class="form-control select2" id="product-category">
                                                <option>Select</option>
                                                <optgroup label="Shopping">
                                                    <option value="SH1">Man</option>
                                                    <option value="SH2">Woman</option>
                                                    <option value="SH3">Child</option>
                                                    <option value="SH4">Other</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-price">Price <span class="text-danger">*</span></label>
                                            <input type="number" name="price" class="form-control" id="product-price" placeholder="Enter amount">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-description" class="form-label">Product Description <span class="text-danger">*</span></label>
                                            <div id="snow-editor"  style="height: 150px;"></div> <!-- end Snow-editor-->
                                            <input id="snow-editor-in" type="hidden" value="" name="editor">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 pt-0">

                                    <div class="card mt-0 pt-0">
                                    <div class="card-body">
                                        <input type="file" name="image1" data-plugins="dropify" data-height="200" />

                                    </div>
                                </div>    
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                    <div class="card-body">

                                        <input type="file" name="image2" data-plugins="dropify" data-height="200" />

                                    </div>
                                </div>    
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                    <div class="card-body">
                                        <input type="file" name="image3" data-plugins="dropify" data-height="200" />

                                    </div>
                                </div>    
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                    <div class="card-body">
                                        <input type="file" name="image4" data-plugins="dropify" data-height="200" />

                                    </div>
                                </div>    
                                </div>
                                
                            </div>
                                <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="mb-2">Status <span class="text-danger">*</span></label>
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
                                                    <input class="form-check-input" type="radio" name="radioInline" value="o" id="inlineRadio3">
                                                    <label class="form-check-label" for="inlineRadio3">Draft</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            
                        <!-- end row -->

                            <div class="col-12">
                                <div class="text-center mb-3">
                                    <button type="submit" name="save" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                    
                                </div>
                            </div> <!-- end col -->
                        <!-- end row -->


                        <!-- file preview template -->
                        <div class="d-none" id="uploadPreviewTemplate">
                            <div class="card mt-1 mb-0 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                            <p class="mb-0" data-dz-size></p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                <i class="dripicons-cross"></i>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>

                        
                    </div> <!-- container -->

                </div> <!-- content -->

<?php include 'footer.php' ?>
<script type="text/javascript">
                
                function getEditor() {
                   $('#snow-editor-in').val($('#snow-editor').html());
                }

        </script>
