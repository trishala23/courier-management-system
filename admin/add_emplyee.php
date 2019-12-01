<script>

function show(a)
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
				   	console.log(result.data.name);

				   	$("#branchname").val(result.data.branch_name);
				   	$("#branchlocation").val(result.data.branch_location);


				   }


			

			}

		});
}
</script>
<?php
include('header.php');
include('sidebar.php');

include('../connection.php');	


?>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Add Emplyee </h3>
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
							<label for="focusedinput" class="col-sm-2 control-label">Emplyee name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="name" placeholder="Enter name" required="" id="dearname">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Role:</label>
							<div class="col-sm-8">
								<select class="form-control" id="sel1" name="role">
   									 <option value="Deliveryboy">Delivery Boy</option>
   									 
  								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Id:</label>
							<div class="col-sm-8">
							<select class="form-control" id="sel1" name="branchid" onchange="show(this.value)">
								<option>select</option>
								<?php 
								$sql=mysqli_query($conn,"select * from branch");
									while($res=mysqli_fetch_array($sql))
									{

									?>
									 <option value="<?php echo $res['branch_id'];?>"><?php echo $res['branch_id'];?></option>
									<?php
								}
								?>
  								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="branch_name" placeholder="branch name" required="" id="branchname">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Location :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="branch_location" placeholder="branch name" required="" id="branchlocation">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">date of join</label>
							<div class="col-sm-8">
								<input type="date" class="form-control1" name="dateofjoin" required="" id="joindate" >
							</div>
						</div>
							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Salary</label>
							<div class="col-sm-8">
								<input type="number" class="form-control1" name="salary" required="" id="phone">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="Emplyee">Submit</button>
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
	include('footer.php');

	if(isset($_REQUEST['Emplyee']))
	{
			$name=$_REQUEST['name'];
			$role=$_REQUEST['role'];
			$branchid=$_REQUEST['branchid'];
			$branch_name=$_REQUEST['branch_name'];
			$branch_location=$_REQUEST['branch_location'];
			$dateofjoin=$_REQUEST['dateofjoin'];
			$salary=$_REQUEST['salary'];
			$empid="EMP".time();

		


		$sql="INSERT INTO `emplyee` (`id`, `name`, `role`, `branchid`, `branch_name`, `branch_location`, `dateofjoin`, `salary`,`Empid`) VALUES (NULL, '$name', '$role', '$branchid', '$branch_name', '$branch_location', '$dateofjoin', '$salary','$empid')";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('Add emplyee  sucessfully');window.location='add_emplyee.php'</script>";
		}
		else
		{
			echo"<script>alert('emplyee insert error');window.location='add_emplyee.php'</script>";

		}

	}
	?>


