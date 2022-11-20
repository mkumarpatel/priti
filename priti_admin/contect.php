<?php 
 include 'connection.php';

 if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    $ins="INSERT INTO `contact`(`number`,`email`,`address`)VALUES('$number','$email','$address')";
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
                                            <li class="breadcrumb-item active">Coutect Us</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Coutect Us</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Contect Us</h5>

                                        <form action="#" method="post" class="parsley-examples">
                                            <div class="mb-3">
                                                <label for="userName" class="form-label">Whatsapp Number<span class="text-danger">*</span></label>
                                                <input type="text" name="number" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="emailAddress" class="form-label">Email address<span class="text-danger">*</span></label>
                                                <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="pass1" class="form-label">Location Address<span class="text-danger">*</span></label>
                                                <input name="address" type="text" placeholder="Location Address" required class="form-control" />
                                            </div>
                                            
                                            <div class="text-end">
                                                <button name="submit" class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->
<!-- end col-->
                        </div>
                        
                        

                        <!-- file preview template -->
                        

                      </div>   
                    </div> 
                </div>

           <?php include 'footer.php' ?>