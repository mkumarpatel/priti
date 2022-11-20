<?php 
include 'connection.php';

$id = $_GET['offer_id']; 

$sel="SELECT * FROM `offers` WHERE `offers_id`='$id'";
$result = mysqli_query($conn,$sel);

while( $data = mysqli_fetch_assoc($result))
{	
	?>
	<div class="form_group mt-2">
		<label>Sr. No.</label>
		<input id="id" class="w-100 fs-4 " value="<?PHP echo $data['offers_id'] ?>" type="text" name=""  autocomplete="off">
	</div>
	<div class="form_group mt-2">
		<label>Name</label>
		<input id="name" class="w-100  fs-4 " type="text" value="<?php echo $data['name'] ?>" name="" autocomplete="off">
	</div>
	<div class="form_group mt-2">
		<label>Start Date</label>
		<input id="sdate" class="w-100  fs-4 " type="text" value="<?php echo $data['sdate'] ?>" name="" autocomplete="off">
	</div>
	<div class="form_group mt-2">
		<label>Exp. Date</label>
		<input id="edate" class="w-100  fs-4 " type="text" value="<?php echo $data['edate'] ?>" name="" autocomplete="off">
	</div>
	<?php

}
?>