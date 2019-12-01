<script>

function show(a)
{
	var branch_id=a;

	$.ajax({
			url:'getbybranch.php',
			 type: 'POST',
			data:{'id':branch_id},
			success:function(res)
			{
				result=JSON.parse(res);
					console.log(result);
				   result=JSON.stringify(response);

				   if (result.status==="sucess") {
				   	console.log(result.data.name);

				   	$("#booked_at_branch").val(result.data.booked_at_branch);
				   	$("#branchlocation").val(result.data.branch_location);


				   }


			

			}

		});
}
</script>
<?php
include('header.php');

include('../connection.php');	


?>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1" align="center"> Add Consignment  Details </h3>
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Shipper Name:</label>
							<div class="col-sm-8">
					<input type="text" class="form-control1" name="shippername" placeholder="Shipper Name" required="" id="dearname">
							</div>
						</div>

							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Shipper address :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="shipperaddress" placeholder="Enter shapping addrerss" required="" id="dearname">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Phone:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="Phone" placeholder="Enter phone" required="" id="dearname">
							</div>
						</div>

							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Material Descrition:</label>
							<div class="col-sm-8">
							 <select class="form-control" id="sel1" name="material_descrition">
   									 <option value="document">document</option>
   									  <option value="document">books</option>
   									   <option value="document">other</option>
							</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">No of item</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="noofitem" placeholder="Enter no of item" required="" >
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Total weight</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="totalwight" placeholder="Enter name" required="" id="dearname">
							</div>
						</div>

							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Category</label>
							<div class="col-sm-8">
							<select class="form-control" id="sel1" name="Category">
   									 <option value="speed">speed</option>
   									 <option value="spical">spical</option>
   									 <option value="normal">normal</option>
							</select>
							</div>
						</div>
					
						
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Shipping charge</label>
							<div class="col-sm-8">
								<input type="number" class="form-control1" name="shappingcharge" placeholder="Enter Shipping charge" required="" >
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Id :</label>
							<div class="col-sm-8">
								<select class="form-control" id="sel1" name="branchid" >
							<option>select</option>
								<?php
								$sql="Select * from branch";
								$res=mysqli_query($conn,$sql);
								
								while($ros=mysqli_fetch_array($res))
								{
									?>
									<option value="<?php echo $ros['branch_id'];?>"><?php echo $ros['branch_id'];?></option>
									<?php
								}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Date of booking :</label>
							<div class="col-sm-8">
								<input type="date" class="form-control1" name="dateofbooking" placeholder="Enter name" required="" id="dearname">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"> book at Branch :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="booked_at_branch" placeholder="Enter name" required="" id="dearname">
							</div>
						</div>
						
					
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Reciver name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="reciver_name" placeholder="Enter Reciver name" required="" id="dearname">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Reciver Address :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="rciveraddress" placeholder="Enter Reciver Address" required="">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Reciver Phone no :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="Reciver_phone_no" placeholder="Enter Reciver Phone no" required="" >
							</div>
						</div>



						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="Consignment">Submit</button>
								<a href=""><button type="button" class="btn btn-danger">Cancel</button></a>
							</div>
						</div>

					</form>
				</div>
			</div>
			<!--body wrapper start-->
		</div>
		<!--body wrapper end-->
	</div>


	<?php 
	

	if(isset($_REQUEST['Consignment']))
	{

$shippername=$_REQUEST['shippername'];
$shipperaddress=$_REQUEST['shipperaddress'];
$Phone=$_REQUEST['Phone'];
$material_descrition=$_REQUEST['material_descrition'];
$noofitem=$_REQUEST['noofitem'];
$totalwight=$_REQUEST['totalwight'];
$Category=$_REQUEST['Category'];

$shappingcharge=$_REQUEST['shappingcharge'];
$branchid=$_REQUEST['branchid'];
$dateofbooking=$_REQUEST['dateofbooking'];

$reciver_name=$_REQUEST['reciver_name'];
$rciveraddress=$_REQUEST['rciveraddress'];
$Reciver_phone_no=$_REQUEST['Reciver_phone_no'];
$booked_at_branch=$_REQUEST['booked_at_branch'];

$ccn="Book".time();

		


		$sql="INSERT INTO `consignment` (`id`, `shippername`, `shipperasddress`, `phone`, `material_descrption`, `no_of_item`, `branch_id`, `booked_at_branch`, `date_of_booking`, `shipment_charge`, `total_weight`, `reciver_name`, `reciver_address`, `reciver_phone`,`ccn`) VALUES (NULL, '$shippername', '$shipperaddress', '$Phone', '$material_descrition', '$noofitem', '$branchid', '$booked_at_branch', '$dateofbooking', '$shappingcharge', '$totalwight','$reciver_name', '$rciveraddress', '$Reciver_phone_no','$ccn')";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('your consignment sucessfully');window.location='view_consignment.php'</script>";
		}
		else
		{
			echo"<script>alert('consignment insert error');window.location='add_consignment.php'</script>";

		}

	}
	?>


