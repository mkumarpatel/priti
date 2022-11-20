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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">View Products</h4>
                                        <!-- <p class="text-muted font-13 mb-4">
                                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                            function:
                                            <code>$().DataTable();</code>.
                                        </p> -->

                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Sr. No.</th>
                                                    <th>Name</th>
                                                    <th>Product Code</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th>Description</th>
                                                    <th>Images</th>
                                                    <th>Images</th>
                                                    <th>Images</th>
                                                    <th>Images</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  <?php
                                                 include 'connection.php';
                                                 $sel="SELECT * FROM products";
                                                  $result=mysqli_query($conn,$sel);
                                                  if(mysqli_num_rows($result)>0){
                                                    while($fetch=mysqli_fetch_assoc($result)){
                                                ?>
                                        
                                        
                                                <tr>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td><?php echo $fetch['product_id'] ?></td>
                                                    <td><?php echo $fetch['product_name'] ?></td>
                                                    <td><?php echo $fetch['product_time'] ?></td>
                                                    <td><?php echo $fetch['product_cat'] ?></td>
                                                    <td><?php echo $fetch['product_price'] ?></td>
                                                    <td><?php echo $fetch['product_des'] ?></td>
                                                    <td class="text-center"><img src="../gallery_upload/<?php echo $fetch['product_img1'] ?>" class="img-fluid" style="width: 50px;"></td>
                                                    <td class="text-center"><img src="../gallery_upload/<?php echo $fetch['product_img2'] ?>" class="img-fluid" style="width: 50px;"></td>
                                                    <td class="text-center"><img src="../gallery_upload/<?php echo $fetch['product_img3'] ?>" class="img-fluid" style="width: 50px;"></td>
                                                    <td class="text-center"><img src="../gallery_upload/<?php echo $fetch['product_img4'] ?>" class="img-fluid" style="width: 50px;"></td>
                                                    <td>
                                                        <?php
                                                          if($fetch['product_status']==1){
                                                            echo "Online";
                                                          }else if($fetch['product_status']==2){
                                                             echo "Ofline";
                                                          }else{
                                                             echo "darft";
                                                          }
                                                        ?> 
                                                    </td>
                                                    <td>
                                                        <span class="fs-3 text-success"><a href="add_products.php"><i class="bi bi-pencil-square"></a></i></span>
                                                       
                                                        <button class="fs-3 text-danger" onclick="delete_pro(<?php echo $fetch['product_id'] ?>)">
                                                            <i class="bi bi-trash"></i>
                                                        </button>

                                                    </td>
                                                </tr>
                                                <?php
                                                   }
                                                 }
                                                 ?>
                                                
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                    
                      </div>   
                    </div> 
                </div>

           <?php include 'footer.php' ?>
           
           <script type="text/javascript">
               function delete_pro(delId){
                    var data='delId='+delId;

                   $.ajax({
                        url:'delete.php',
                        type:'POST',
                        data:data,
                            success: function(data){
                                 alert(data);
                             
                        }
                    
                         });

               }
           </script>