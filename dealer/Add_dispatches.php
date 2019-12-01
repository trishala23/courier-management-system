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

				   	 $("#branchname").val(result.data.branch_id);
				   	 $("#shippername").val(result.data.shippername);
				   	 $("#phoneno").val(result.data.phone);
				   	 $("#senderaddress").val(result.data.shipperasddress);
				   	 $("#reciver_name").val(result.data.reciver_name);
				   	 $("#reciverphoneno").val(result.data.reciver_phone);
				   	 $("#reciveraddress").val(result.data.reciver_address);






				   }




				}

			});
	}
	function show2(a)
{
	var reqid1=a;
		

		$("#dispatcherid").val(reqid1);
		

	}
</script>

<?php
include('header.php');
include('../connection.php');	
?>

<div id="page-wrapper" style="overflow: scroll;
    height: 509px;">
	<div class="graphs">
		<h3 class="blank1" align="center">Add dispatches </h3>
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
						<label for="focusedinput" class="col-sm-2 control-label">Branch name :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="bookatbranch"  required="" id="branchname">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Shipper name :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="shippername" placeholder="Shipper name" required="" id="shippername">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Phone no :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="phonename" placeholder="" required="" id="phoneno">
						</div>
					</div>

						<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Sender Address:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="senderaddress" placeholder="" required="" id="senderaddress">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Reciver name:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="reciver_name" placeholder="" required="" id="reciver_name">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Reciver PhoneNo:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="reciverphoneno" placeholder="" required="" id="reciverphoneno">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Reciver Address:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="reciveraddress" required="" id="reciveraddress">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Assigned to:</label>
						<div class="col-sm-8">
						<select class="form-control" id="sel1" name="assignedto" onchange="show2(this.value)">
								<option>select</option>
								<?php

								$sql="Select * from emplyee";
								$res=mysqli_query($conn,$sql);
								$i=1;
								while($ros=mysqli_fetch_array($res))
								{
									?>
									<option value="<?php echo $ros['Empid'];?>"><?php echo $ros['name'];?></option>
									<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Dispatcher Id:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="dispatcherid" placeholder="" required="" id="dispatcherid">
						</div>
					</div>


					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
							<button type="Submit" class="btn btn-success" name="applybranch">Submit</button>
							<a href="add_dispatches.php"><button type="button" class="btn btn-danger">Cancel</button></a>
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
	

$bookatbranch=$_REQUEST['bookatbranch'];
$shippername=$_REQUEST['shippername'];
$phone=$_REQUEST['phonename'];
$senderaddress=$_REQUEST['senderaddress'];
$reciver_name=$_REQUEST['reciver_name'];
$reciverphoneno=$_REQUEST['reciverphoneno'];
$reciveraddress=$_REQUEST['reciveraddress'];
$assignedto=$_REQUEST['assignedto'];
$dispatcherid=$_REQUEST['dispatcherid'];

$dispatchid="DIS".time();
$ccn=$_REQUEST['ccn'];

	



	$sql="INSERT INTO `dispatcher` (`id`, `ccn`, `Branch_name`, `shipper_name`, `phone`, `sender_address`, `reciver_name`, `reciver_phoneno`, `reciver_ address`, `assignedto`, `dispatcher_Id`,`dispatchid`) VALUES (NULL, '$ccn', '$bookatbranch', '$shippername', '$phone', '$senderaddress', '$reciver_name', '$reciverphoneno', '$reciveraddress', '$assignedto', '$dispatcherid','$dispatchid')";

	$res=mysqli_query($conn,$sql);

	if($res)
	{
		echo"<script>alert('add dispatches sucessfully');window.location='view_dispatches.php'</script>";
	}
	else
	{
		echo"<script>alert('data dispatches error');window.location='add_dispatches.php'</script>";

	}

}
?>


