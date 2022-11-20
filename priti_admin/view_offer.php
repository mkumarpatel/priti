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
                                    <h4 class="page-title">add/ Edit Category</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">View Category</h4>
                                        <!-- <p class="text-muted font-13 mb-4">
                                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                            function:
                                            <code>$().DataTable();</code>.
                                        </p>
 -->
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Sr.No.</th>
                                                    <th>Name</th>
                                                    <th>Start Date</th>
                                                    <th>Exp. Date</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <?php 
                                                    include 'connection.php';
                                                    $sel="SELECT * FROM offers";
                                                    $result=mysqli_query($conn,$sel);
                                                    if(mysqli_num_rows($result)>0){
                                                        while($fetch=mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td><?php echo $fetch['offers_id'] ?></td>
                                                    <td><?php echo $fetch['name'] ?></td>
                                                    <td><?php echo $fetch['sdate'] ?></td>
                                                    <td><?php echo $fetch['edate'] ?></td>
                                                    <td>
                                                        <button class="edit_btn" data-edit=<?php echo $fetch['offers_id'] ?>>
                                                            <a href="#staticBackdrop" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#staticBackdrop"
                                                                data-edit=<?php echo $fetch['offers_id'] ?>>
                                                                Update
                                                            </a>
                                                        </button>
                                                    </td>
                                                    
                                                </tr>
                                                <?php 
                                                   }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex    ="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-md">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fs-3" id="staticBackdropLabel">Add/Edit Customer</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                            <form method="post">
                                            <div class="modal-body">
                                                    
                                            </div>
                                            <div class="modal-footer">
                                                 <button type="submit" class="rounded-2 p-1 text-white fs-5 bg-success btn_log border-0" name="submit">Update</button>
                                                 
                                                <button type="button" class="btn btn-secondary rounded-2" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        
                        

                        <!-- file preview template -->
                        

                      </div>   
                    </div> 
                </div>

           <?php include 'footer.php' ?>
           <script type="text/javascript">
               $('.edit_btn').on("click",function(){
                    var offer_id = $(this).data("edit");
                    

                    $.ajax({
                        url: "offer_edit.php",
                        type: "GET",
                        data: {offer_id},
                        success:function(data){
                           $(".modal-body").html(data);
                        }
                    });
               });
           </script>