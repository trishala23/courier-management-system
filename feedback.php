<?php
include('connection.php');
mysqli_select_db($conn,'speed_age');
$sqlget="select * from testimonial";
$record=mysqli_query($conn,$sqlget);
?>
<!DOCTYPE html>
<head>
	<title>feedback</title>
</head>
<style type="text/css">
		
	body {
			
			background-image:url('img/f.jpg');
			background-size: cover;
			
		}
		
	table {
				border: 0px red solid;
			
				
				font-size: 30px;

	}
	th {
		border:1px red solid;
	}
	td {
		border:1px red solid;
	}
	
	table.login_tab {
		background:rgba(255,255,255,0.9);
		cellspacing:0px; 
		cellpadding:0px;
	}
	
	table.main_tab {
		background:rgba(0,0,0,0);
		width:70%;
	}
	
	td.login {
			background-color:#C0C0C0;
			padding-left:5px;
			padding-right:5px;
	}
	td.login_table {
			background:rgba(248,248,255,1);
			padding-top:50px;
			padding-left:40px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
	}
	td.login_nam {
		height:30px;
		font-size:13pt;
		color:white;
		background-color:#3b5998;
		padding-left:5px;
	}
	td.new {
		height:30px;
		font-weight:none;
		font-size:11pt;
	}
	
	
	


	</style>
<body>
	
	<section id="feedback">
<h2>Ur Feedback is valuable for us..</h2>
<table border="1px" align="center" style="width: 800px; line-height: 40px;">
	<tr>
		
		<th>name</th>
		<th>email</th>
		<th>subject</th>
		<th>message</th>

	</tr>
	<?php 

	while($test=mysqli_fetch_assoc($record))
	{
		?>
		<tr>
			

			<td><?php echo $test['name']; ?></td>
			<td><?php echo $test['email']; ?></td>

			<td><?php echo $test['subject']; ?></td>

			<td><?php echo $test['message']; ?></td>
		</tr>
		

	 <?php
	}
?>
</section>
</table>

</body>
</html>