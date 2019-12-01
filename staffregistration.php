<?php

include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

         <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">




        <div class="modal-content">
        
          <div class="modal-header">
            
            <h3 class="modal-title" style="margin-right: 66%;"> Registration</h3>
            
          </div>
          <div class="modal-body">
           <form action="" method="post">
           	
            <div class="form-group">
            <label for="email">User name:</label>
              <input type="text" class="form-control" name="user" id="email" required="">
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" id="email" required="">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password">
            </div>
             
             <div class="form-group">
              <label for="pwd">Address:</label>
              <input type="text" class="form-control" id="pwd" name="address">
            </div>
             
            <button type="submit" class="btn btn-default" name="staff_register">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    

    </div>
  </div>

  <?php

if(isset($_REQUEST['staff_register']))
{
 
  $username=$_REQUEST['user'];
 
  $password=$_REQUEST['password'];
 
  $address=$_REQUEST['address'];
  $email=$_REQUEST['email'];
 

    $sql=mysqli_query($conn,"INSERT INTO `deaer` (`username`, `password`, `address`,`email`) VALUES ('$username', '$password', '$address','$email')");

    if($sql)
    {
      echo "<script>alert('your details has been register successfully...');</script>";
    }
    else
    {
      echo "<script>alert('error');</script>";
    }
}

  ?>
</body>
</html>

