


<?php
include('header.php');
include('sidebar.php');
include('../connection.php');	
?>

<div id="page-wrapper" style="overflow: scroll;
    height: 509px;">
	<div class="graphs">
		<h3 class="blank1">Consignment Report </h3>
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="report.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">From</label>
						<div class="col-sm-8">
							<input type="date" class="form-control1" name="From" placeholder="" required="" id="reciver_name">

						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">To</label>
						<div class="col-sm-8">
							<input type="date" class="form-control1" name="to" placeholder="" required="" id="reciver_name">

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


