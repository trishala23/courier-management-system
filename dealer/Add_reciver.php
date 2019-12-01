<script>
	function show(a)
	{
		console.log(a);
		var reqid=a;
		

		$.ajax({
			url:'getbydispachure.php',
			type: 'POST',
			data:{'id':reqid},
			success:function(res)
			{
				result=JSON.parse(res);
				console.log(result);
				   // result=JSON.stringify(response);

				   if (result.status==="sucess") {
				   	console.log(result.data);

				   	 $("#branchname").val(result.data.Branch_name);
				   	 $("#shippername").val(result.data.shippername);
				   	
				   	 $("#senderaddress").val(result.data.shipperasddress);
				   	 $("#reciver_name").val(result.data.reciver_name);
				   	 $("#reciverphoneno").val(result.data.reciver_phoneno);
				   	 $("#reciveraddress").val(result.data.reciver_address);
				   	 $("#Dispatchername").val(result.data.assignto);
				   	 $("#DispatcherID").val(result.data.dispatcher_Id);


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
		<h3 class="blank1" align="center">Add receiver </h3>
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
						<label for="focusedinput" class="col-sm-2 control-label">receiver name:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="reciver_name" placeholder="" required="" id="reciver_name">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">receiver PhoneNo:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="reciverphoneno" placeholder="" required="" id="reciverphoneno">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">BookedAt:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="BookedAt"  required="" id="branchname">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Material Desscription :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="Material" placeholder="material description" required="" id="shippername">
						</div>
					</div>

					

						<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Date of Receive:</label>
						<div class="col-sm-8">
							<input type="date" class="form-control1" name="dateofreceive" placeholder="" required="" id="senderaddress">
						</div>
					</div>
				

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Name of  Receiver:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="recivername" required="" id="reciveraddress">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Relation:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="relation" required="" id="reciveraddress">
						</div>
					</div>

						<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Dispatchername:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="Dispatchername" required="" id="Dispatchername">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">DispatcherID:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="DispatcherID" required="" id="DispatcherID">
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

$reciver_name=$_REQUEST['reciver_name'];
$reciverphoneno=$_REQUEST['reciverphoneno'];

$Material=$_REQUEST['Material'];

$dateofreceive=$_REQUEST['dateofreceive'];
$recivername=$_REQUEST['recivername'];
$relation=$_REQUEST['relation'];
$Dispatchername=$_REQUEST['Dispatchername'];
$DispatcherID=$_REQUEST['DispatcherID'];
$reciverid="REC".time();
$BookedAt=$_REQUEST['BookedAt'];


	



	$sql="INSERT INTO `receiver` (`id`, `ccn`, `receiver_name`, `reciverphoneno`, `Material`, `dateofreceive`, `recivername`, `relation`, `Dispatchername`, `DispatcherID`, `receiver_id`,`BookedAt`) VALUES (NULL, '$ccn', '$reciver_name', '$reciverphoneno', '$Material', '$dateofreceive', '$recivername', '$relation', '$Dispatchername', '$DispatcherID', '$reciverid','$BookedAt')";

	$res=mysqli_query($conn,$sql);

	if($res)
	{
		echo"<script>alert('add Receiver sucessfully');window.location='view_reciver.php'</script>";
	}
	else
	{
		echo"<script>alert('Receiver error');window.location='add_reciver.php'</script>";

	}

}
?>
