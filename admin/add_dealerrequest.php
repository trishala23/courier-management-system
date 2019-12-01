<?php
include('header.php');

?>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1" align="center">Add DealerShip Request</h3>
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
						<label for="focusedinput" class="col-sm-2 control-label">Applicant Name:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="name" placeholder="Enter name" required="">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label"> Applicant Address</label>
						<div class="col-sm-8">
							<textarea class="form-control" rows="5" id="comment" name="address"  required=""></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Applicant Phone</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="phone" required="">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Date of Apply:</label>
						<div class="col-sm-8">
							<input type="date" class="form-control1" name="date_of_apply" required="">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Amount Deposited:</label>
						<div class="col-sm-8">
							<input type="number" class="form-control1" name="amount" required="">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Branch Location:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="branchlocation" required="">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label"> Office Address</label>
						<div class="col-sm-8">
							<textarea class="form-control" rows="5" id="comment" name="offaddress"  required=""></textarea>
						</div>
					</div>
						<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Pin code:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="pincode" required="">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
							<button type="Submit" class="btn btn-success" name="apply">Submit</button>
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

if(isset($_REQUEST['apply']))
{
	include('../connection.php');	

 $name=$_REQUEST['name'];
 $address=$_REQUEST['address'];
 $phone=$_REQUEST['phone'];
 $date_of_apply=$_REQUEST['date_of_apply'];
 $amount=$_REQUEST['amount'];
 $officeaddress=$_REQUEST['offaddress'];
 $branchlocation=$_REQUEST['branchlocation'];
 $pincode=$_REQUEST['pincode'];
 $reqid=time();



	$sql="INSERT INTO `dearship_request` ( `name`, `address`, `phone`, `applydate`, `amount`, `branch_location`, `office`,`pincode`,`reqid`) VALUES ('$name', '$address', '$phone', '$date_of_apply', '$amount', '$branchlocation', '$officeaddress','$pincode','$reqid')";
	$res=mysqli_query($conn,$sql);
	
	if($res)
	{
		 echo"<script>alert('data insert sucessfully');window.location='add_dealerrequest.php'</script>";
	}
	else
	{
		 echo"<script>alert('data insert error');window.location='add_dealerrequest.php'</script>";

	}

}
?>









