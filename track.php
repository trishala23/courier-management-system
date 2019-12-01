<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Courier Management System</title>
</head>

<body>
		<?php
        
			 include('connection.php');
			 mysqli_select_db($conn,"speed_age");
			?>
			
  
		<style type="text/css">
	body {
			
			background-image:url('images/t.jpg');
			height: 55px;
			background-position: center;
			background-size: cover;
			
		}
		
	table {
				border: 0px red solid;
			
				padding-top:50px;
				margin-top:50px;
				padding-left:20px;
				margin-left:20px;
				cellspacing:5px; 
				cellpadding:5px;
				font-size: 30px
	}
	td {
		border:0px green dotted;
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
	
	a {
		color:#999933;
	}
	a:hover {
	
		font-size:30pt;
	}
	td.marquee{
		padding-top:1px;
		padding-bottom:1px;
		padding-left:130px;
		background:rgba(0,0,0,1);
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
	}
</style>
			
          <h2>Track Courier</h2>
            <p>&nbsp;</p>
            <div class="clear h40"></div>
          <div class="half left">
<form method="post" action="trackhome.php">
 <table class="login_tab1">
  <tr>
    <td colspan="2" class='login_nam' valign='middle'>Track Courier</td>
  </tr>
  
  <tr>
    <td class='login style1'>courrier id:</td>
    <td class='login'><input type='int' name='ccn' />
    </td>
  </tr>
  <tr>
    <td class='login' colspan='2'><input type='submit' name='submit2' value='Track Now !!' />
    </td>
    <td class='new'>&nbsp;</td>
  </tr>
</table></form>
<p>&nbsp;</p>
</body>
</html>
