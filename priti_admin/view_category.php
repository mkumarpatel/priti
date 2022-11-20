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
                                            <tr> <th>Select</th>
                                                <th>Sr.No.</th>
                                                <th>Category Name</th>
                                                <th>Description</th>
                                                <th>Category Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'connection.php';
                                            $sel="SELECT * FROM category";
                                            $result=mysqli_query($conn,$sel);
                                            if(mysqli_num_rows($result)>0){
                                                 $count = 1;
                                                while($fetch=mysqli_fetch_assoc($result)){
                                                    ?>


                                                    <tr>
                                                        <td><input type="checkbox" name=""></td>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $fetch['category_name'] ?></td>
                                                        <td><?php echo $fetch['category_des'] ?></td>
                                                        <td class="text-center"><img src="../gallery_upload/<?php echo $fetch['category_img'] ?>" class="img-fluid" style="width: 50px;"></td>
                                                        <td>
                                                            <?php
                                                            if($fetch['category_status']==1){
                                                                echo "Online";
                                                            }else if($fetch['category_status']==2){
                                                               echo "Ofline";
                                                           }else{
                                                               echo "darft";
                                                           }
                                                           ?> 
                                                       </td>
                                                       <td>
                                                        <span class="fs-3"><a class="text-success"href="add_category.php?edit=<?php echo $fetch['category_id']?>"><i class="bi bi-pencil-square"></i></a></span>
                                                        <span class="fs-3 text-danger">
                                                            <a class="text-danger" href="javascript:void(0)" onclick="abcd(<?php echo $fetch['category_id'] ?>)">
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <?php
                                                $count++;
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

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
    function abcd(id){
        var data= "id="+id;
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
        .then((willDelete) => {
          if (willDelete) {
            // window.location.href = "delete.php?id="+id;
            $.ajax({
                url:'delete.php',
                type:'POST',
                data:data,
                success:function(data){
                if(data==1){
                    swal("Poof! Your imaginary file has been deleted!", {
                     icon: "success",
                    });   
                }else{
                      swal("Poof! Your imaginary file has been not deleted!", {
                     icon: "error",    
                });
                }
            }
        });
            
        } else {
            swal("Your imaginary file is safe!");
        }
    });
    }

    </script>