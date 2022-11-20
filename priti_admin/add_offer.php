<?php 
    include 'connection.php';

    if(isset($_POST['save'])){
        $name=$_POST['name'];
        $sdate=$_POST['sdate'];
        $edate=$_POST['edate'];

        $ins="INSERT INTO `offers`(`name`,`sdate`,`edate`)VALUES('$name','$sdate','$edate')";
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
                                            <li class="breadcrumb-item active">Add / Edit Category</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add / Edit Products</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Flatpickr - Date picker</h4>
                                        <p class="sub-header">A lightweight and powerful datetimepicker</p>

                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Basic datepicker">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" id="datetime-datepicker" name="sdate" class="form-control" placeholder="Date and Time">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Exp. Date</label>
                                            <input type="date" id="humanfd-datepicker" name="edate" class="form-control" placeholder="October 9, 2018">
                                        </div>

                                        
                                    </div>
                                </div> <!-- end card-->
                                <div class="text-end mb-3 px-3">
                                    <button type="submit" name="save" class="btn fs-4 px-3 rounded-3 w-sm btn-success waves-effect waves-light">Save</button>
                                </div>
                            </form>
                            </div> <!-- end col -->

                </div>

           <?php include 'footer.php' ?>