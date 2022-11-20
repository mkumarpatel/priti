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
                                <li class="breadcrumb-item active">Customer</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Customer</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#custom-modal"><i class="mdi mdi-plus-circle me-1"></i> Add Customer</button>
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-sm-end mt-2 mt-sm-0">
                                        <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                        <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                        <button type="button" class="btn btn-light mb-2">Export</button>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                                    <thead>
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Customer</th>
                                            <th>Phone Number</th>
                                            <th>Email Address</th>
                                            <th>Create Date</th>
                                            <th>Pincode</th>
                                            <th>Address</th>
                                            <th>Password</th>
                                            <th>Status</th>
                                            <th style="width: 85px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'connection.php';

                                        $sel="SELECT * FROM `customer` ORDER BY `customer_id` DESC";
                                        $result=mysqli_query($conn,$sel)or die('query faild');
                                        if(mysqli_num_rows($result)>0){
                                           while ($fetch=mysqli_fetch_assoc($result)){

                                            ?>

                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">

                                                    </div>
                                                </td>
                                                <td class="table-user">
                                                    <?php echo $fetch['cust_name'];  ?>  
                                                </td>
                                                <td>
                                                    <?php echo $fetch['cust_phone'];  ?>  

                                                </td>
                                                <td>
                                                    <?php echo $fetch['cust_email'];  ?>  

                                                </td>
                                                <td>
                                                    <?php echo $fetch['date'];  ?>  

                                                </td>
                                                <td>
                                                    <?php echo $fetch['cust_pin'];  ?>  

                                                </td>


                                                <td>
                                                    <?php echo $fetch['address'];  ?>  

                                                </td>
                                                <td>
                                                    <?php echo $fetch['cust_password'];  ?>  

                                                </td>

                                                <td>
                                                    <span class="badge bg-soft-success text-success">Active</span>
                                                </td>

                                                <td class="text-center">
                                                    <a href="#editEmployeeModal" 
                                                        id="<?php echo $fetch['customer_id'];  ?>" 
                                                        name="<?php echo $fetch['cust_name'];  ?>" 
                                                        phone="<?php echo $fetch['cust_phone'];  ?>" 
                                                        email="<?php echo $fetch['cust_email'];  ?>" 
                                                        date="<?php echo $fetch['date'];  ?>" 
                                                        pincode="<?php echo $fetch['cust_pin'];  ?>" 
                                                        address="<?php echo $fetch['address'];  ?>" 
                                                        oldpass="<?php echo $fetch['cust_password'];  ?>" 
                                                        class="action-icon text-dark fs-3   
                                                        editBtn"data-bs-toggle="modal" 
                                                        data-bs-target="#staticBackdrop"> 
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                    </a>
                                                </td>
                                                </tr>

                                                <?php
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex    ="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fs-3" id="staticBackdropLabel">Add/Edit Customer</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                            <form method="post">
                                            <div class="modal-body">
                                                   
                                                    <div class="form_group mt-2">
                                                        <label>Sr. No.</label>
                                                        <input id="id" class="w-100 border fs-4 " type="text" name="name" placeholder="" autocomplete="off">
                                                    </div>
                                                    <div class="form_group mt-2">
                                                        <label>Name</label>
                                                        <input id="name" class="w-100 border rounded-3 fs-4 " type="text" name="name" placeholder="Username*" autocomplete="off">
                                                    </div>
                                                    <div class="form_group mt-2">
                                                        <label>Phone Number</label>
                                                        <input class="w-100  fs-4 rounded-3 border" id="phoneNumber" type="number" name="phone" placeholder="phone no.*">
                                                    </div>
                                                    <div class="form_group mt-2">
                                                        <label>Email</label>
                                                        <input class="w-100  rounded-3 fs-4 " id="customerEmail" type="email" name="email" placeholder="Email*">
                                                    </div>
                                                    <div class="form_group mt-2">
                                                        <label>Date</label>
                                                        <input class="w-100 rounded-3  fs-4 " id="customerDate" type="date" name="date" placeholder="date*">
                                                    </div>
                                                    <div class="form_group mt-2">
                                                        <label>Pincode</label>
                                                        <input class="w-100 rounded-3 fs-4 "id="customerPin" type="number" name="pincode" placeholder="Pincode*">
                                                    </div>
                                                    <div class="form_group mt-2">
                                                        <label>Address</label>
                                                        <textarea class="w-100 rounded-3 border fs-4 " id="customerAddress" type="text" name="address">Address</textarea>
                                                    </div>
                                                    
                                
                                            </div>
                                            <div class="modal-footer m-0 p-0">
                                                 <button  class="rounded-2 p-1 text-white fs-5 bg-success btn_log border-0"
                                                   onclick="update_id()" >Update</button>
                                                <button  class=" btn fs-5  delete_btn border-0 rounded-2 bg-danger text-white"
                                                     onclick="delete_id()">Delete</button> 
                                                <button type="button" class="btn btn-secondary rounded-2" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="pagination pagination-rounded justify-content-end mb-0">
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </li>
                            </ul>

                        </div> 
                    </div> 
                </div>
            </div>
        </div>   
    </div> 
</div>

<?php include 'footer.php' ?>
<script type="text/javascript">


  function delete_id(){
    var idd = document.getElementById('id').value;
    var data = "id="+idd;
     alert(data);
     $.ajax({
         url:'user_delete.php',
         type:'GET', 
         data:data,
         success:function(data){
             alert(data);
         }
     });
 }
    
    function update_id(){
    var add = document.getElementById('id').value;
    var data = "id="+add;
     $.ajax({
        url:'user_delete.php',
        type:'POST', 
        data:{
                 data,
                id: $('#id').val(),
                name: $('#name').val(),
                email: $('#phoneNumber').val(),
                phone: $('#customerEmail').val(),
                date: $('#customerDate').val(),
                pin: $('#customerPin').val(),
                address: $('#customerAddress').val()
            },
        success:function(data){
            alert(data);
        }
    });
  }

    
    $('.editBtn').on('click', function () {
        $('#id').val($(this).attr('id'))
        $('#name').val($(this).attr('name'))
        $('#phoneNumber').val($(this).attr('phone'))
        $('#customerEmail').val($(this).attr('email'))
        $('#customerDate').val($(this).attr('date'))
        $('#customerPin').val($(this).attr('pincode'))
        $('#customerAddress').val($(this).attr('address'))
        $('#oldPassword').val($(this).attr('oldpass'))
    });

</script> 