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
			
			
			
			
			
			$ccn=$_POST['ccn'];
      
			
			
			$sql="select * from courier_track where ccn='$ccn'";
			
			
			
			$result=mysqli_query($conn,$sql);
			include("report3.php");
			if(!$result)
			{
			echo "Incorrect details !" . "</br>";
			include 'index.php';
			}
			else {
			
			echo "<table>";
			
			while( $row=mysqli_fetch_row($result))
			{
				
				echo "<tr><td><p>Courier ID:</p></td>
				<td>$row[0]</td>
				</tr>
				<tr><td><p>Sender name:</p></td><td>$row[1]</td></tr>; 

				<tr><td><p>date:</p></td><td>$row[2]</td></tr>; 

				<tr><td><p>Status:</p></td><td>$row[3]</td></tr>"; 
				
				
			
			
			}
			echo "</table>"; }
        ?>

</body>
</html>
