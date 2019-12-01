
<?php
include('header.php');
include('../connection.php');	
?>

<div id="page-wrapper" style="overflow: scroll;
    height: 509px;">
	<div class="graphs">
		<h3 class="blank1" align="center">Place Request</h3>
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
						<label for="focusedinput" class="col-sm-2 control-label">Applicant name:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="Applicant_name" placeholder="" required="" id="reciver_name">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Applicant Address:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="Applicant_Address" placeholder="" required="" id="reciverphoneno">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">phoneno:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="phoneno"  required="" id="branchname">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Date of apply:</label>
						<div class="col-sm-8">
							<input type="date" class="form-control1" name="dateofapply" placeholder="Date of apply" required="" id="shippername">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Amount Deposited</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="AmountDeposited" required="" id="phoneno">
						</div>
					</div>

						<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Branch Location:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="BranchLocation" placeholder="" required="">
						</div>
					</div>
				

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Office Address</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="office_address" required="" >
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">pincode:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="pincode" required="">
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
	
$Applicant_name=$_REQUEST['Applicant_name'];
$Applicant_Address=$_REQUEST['Applicant_Address'];
$phoneno=$_REQUEST['phoneno'];
$dateofapply=$_REQUEST['dateofapply'];
$AmountDeposited=$_REQUEST['AmountDeposited'];
$BranchLocation=$_REQUEST['BranchLocation'];
$office_address=$_REQUEST['office_address'];
$pincode=$_REQUEST['pincode'];
$placeid="pla".time();


	



	$sql="INSERT INTO `place_request` (`id`, `applicant_name`, `applicant_address`, `phoneno`, `date_of_apply`, `amountdeposited`, `branchLocation`, `office_Address`, `placeid`, `status`, `pincode`) VALUES (NULL, '$Applicant_name', '$Applicant_Address', '$phoneno', '$dateofapply', '$AmountDeposited', '$BranchLocation', '$office_address', '$placeid', '1', '$pincode')";

	$res=mysqli_query($conn,$sql);

	if($res)
	{
		echo"<script>alert('your place Request sucessfully');window.location='home.php'</script>";
	}
	else
	{
		echo"<script>alert('place request error');window.location='placerequest.php'</script>";

	}

}
?>






