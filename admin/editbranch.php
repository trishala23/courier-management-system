
<?php
include('header.php');

include('../connection.php');	

$id=$_REQUEST['id'];
echo $id;
$sql=mysqli_query($conn,"select * from branch where id='$id'");
$res=mysqli_fetch_array($sql);
?>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1" align="center"> Edit Branch </h3>
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
							<label for="focusedinput" class="col-sm-2 control-label">Dealer name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="name" placeholder="Enter name" required="" id="dearname" value="<?php echo $res['dealer_name'];?>" readonly="">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Location :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="branch_location" placeholder="branch location" required="" id="branchlocation" value="<?php echo $res['branch_location'];?>"   readonly="">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="branch_name" placeholder="branch name" required=""  value="<?php echo $res['branch_name'];?>"   readonly="">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Pincode</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="pincode" required="" id="pincode" value="<?php echo $res['pincode'];?>"   readonly="">
							</div>
						</div>
							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Phone</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="phone" required="" id="phone" value="<?php echo $res['phone'];?>">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"> Branch Address</label>
							<div class="col-sm-8">
							<input type="text" class="form-control1" name="branchaddress" required="" id="officeaddress" value="<?php echo $res['branchaddress'];?>" >
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
		include('../connection.php');	

		 
		 $branchaddress=$_REQUEST['branchaddress'];
		 $phone=$_REQUEST['phone'];



		$sql="UPDATE `branch` SET `branchaddress` = '$branchaddress', `phone` = '$phone' WHERE `branch`.`id` = '$id'";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('update sucessfully');window.location='branch_details.php'</script>";
		}
		else
		{
			echo"<script>alert('data update error');window.location='branch_details.php'</script>";

		}

	}
	?>


