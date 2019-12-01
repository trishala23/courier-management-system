<script>
	function show(a)
	{
		var reqid=a;
		

		$.ajax({
			url:'getbybranchcon.php',
			type: 'POST',
			data:{'id':reqid},
			success:function(res)
			{
				result=JSON.parse(res);
				console.log(result);
				   // result=JSON.stringify(response);

				   if (result.status==="sucess") {
				   	console.log(result.data.name);

				   	 $("#bookatbranch").val(result.data.branch_id);
				   	 $("#shippername").val(result.data.shippername);
				   //	 $("#pincode").val(result.data.pincode);
				   	//$("#officeaddress").val(result.data.office);
				   	 //$("#phone").val(result.data.phone)






				   }




				}

			});
	}
	function show1(a)
	{
		var reqid=a;
		

		$.ajax({
			url:'getbybranch.php',
			type: 'POST',
			data:{'id':reqid},
			success:function(res)
			{
				result=JSON.parse(res);
				console.log(result);
				   // result=JSON.stringify(response);

				   if (result.status==="sucess") {
				   	console.log(result.data);

				   	 $("#dealername").val(result.data.dealer_name);
				   	// $("#shippername").val(result.data.shippername);
				   	 //$("#pincode").val(result.data.pincode);
				   	 //$("#officeaddress").val(result.data.office);
				   	// $("#phone").val(result.data.phone)






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
		<h3 class="blank1" align="center">Add Delivery </h3>
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
						<label for="focusedinput" class="col-sm-2 control-label">CCN</label>
						<div class="col-sm-8">
							<select class="form-control" id="sel1" name="ccn" onchange="show(this.value)">
								<option>select</option>
								<?php
								$sql="Select * from consignment";
								$res=mysqli_query($conn,$sql);
								$i=1;
								while($ros=mysqli_fetch_array($res))
								{
									?>
									<option value="<?php echo $ros['ccn'];?>"><?php echo $ros['ccn'];?></option>
									<?php
								}
								?>
							</select>

						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Book at branch :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="bookatbranch"  required="" id="bookatbranch">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Shipper name :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="shippername" placeholder="Shipper name" required="" id="shippername">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Delivery at branch  :</label>
						<div class="col-sm-8">
							<select class="form-control" id="sel1" name="dliveryatbranch" onchange=
							"show1(this.value)">
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
						<label for="focusedinput" class="col-sm-2 control-label">Dealer name</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="dealername" required="" id="dealername">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Date of Delivery </label>
						<div class="col-sm-8">
							<input type="date" class="form-control1" name="dateofdelivery" required="" id="phone">
						</div>
					</div>
					


					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
							<button type="Submit" class="btn btn-success" name="applybranch">Submit</button>
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

if(isset($_REQUEST['applybranch']))
{
	

	$ccn=$_REQUEST['ccn'];
$bookatbranch=$_REQUEST['bookatbranch'];
$shippername=$_REQUEST['shippername'];
$dliveryatbranch=$_REQUEST['dliveryatbranch'];
$dealername=$_REQUEST['dealername'];
$dateofdelivery=$_REQUEST['dateofdelivery'];

$dliveriyid="del".time();

	



	$sql="INSERT INTO `delivery` (`id`, `ccn`, `deliveryid`, `shippername`, `bookatbranch`, `deliveryedatbranch`, `dealername`, `dateofdelivery`) VALUES (NULL, '$ccn', '$dliveriyid', '$shippername', '$bookatbranch', '$dliveryatbranch', '$dealername', '$dateofdelivery')";

	$res=mysqli_query($conn,$sql);

	if($res)
	{
		echo"<script>alert('add delivery sucessfully');window.location='view_delivery.php'</script>";
	}
	else
	{
		echo"<script>alert('data insert error');window.location='add_delivery.php'</script>";

	}

}
?>








