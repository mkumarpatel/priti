<?php 
 include 'connection.php';

 if(isset($_POST['save'])){
    $question=$_POST['question'];
    $answer=$_POST['answer'];

    $ins="INSERT INTO `faq`(`question`,`answer`)VALUES('$question','$answer')";
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

                                        <form action="#" method="post" class="parsley-examples">
                                            <div class="mb-3">
                                                <label for="userName" class="form-label"><span class="text-danger">Questions</span></label>
                                                <input type="text" name="question" parsley-trigger="change" required placeholder="" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-textarea" class="form-label text-dark">Answer</label>
                                                <textarea class="form-control" name="answer" id="example-textarea"
                                                    rows="5"></textarea>
                                            </div>
                                            
                                            <div class="text-end">
                                                <button name="save" class="btn btn-primary waves-effect waves-light" type="submit">save</button>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        
                        

                        

                      </div>   
                    </div> 
                </div>

           <?php include 'footer.php' ?>