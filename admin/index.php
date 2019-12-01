<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <!-- jQuery -->
  <!-- lined-icons -->
  <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <!-- //lined-icons -->
  <!-- chart -->
  <script src="js/Chart.js"></script>
  <!-- //chart -->
  <!--animate-->
  <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts---> 
    <!-- Meters graphs -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

  </head> 

  <body class="sign-in-up">
    <section>
      <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
          <div class="sign-in-form">
            <div class="sign-in-form-top">
              <p><span>Sign In to</span> Admin</p>
            </div>
            <div class="signin">
             
              <form action="" method="post">
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="text" class="user" name="username" placeholder="Enter your username" required=""/>
                  </div>
                  
                  <div class="clearfix"> </div>
                </div>
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="password" class="lock" name="password" placeholder="Enter your password"/>
                  </div>
                  
                  <div class="clearfix"> </div>
                </div>
          
                <div class="log-input">
                 <div class="log-input-left">
                  <select class="form-control" id="sel1" name="type" required="">
                  <option value="admin">Admin</option>
                   
                  </select>
                  </div>
                   
                  </div>
                  <div class="clearfix"> </div>
                
                <input type="submit" value="Login to your account" name="s1">
              </form>	
              <!--  -->
            </div>

          </div>
        </div>
      </div>
     
    </section>

    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>


  <?php

  if(isset($_REQUEST['s1']))
  {
    include('../connection.php');
     echo $username=$_REQUEST['username'];
     echo $password=$_REQUEST['password'];

     echo $login_type=$_REQUEST['type'];



     if($login_type=='admin')
     {
      $res=mysqli_query($conn,"SELECT * FROM `admin` WHere admin='$username' And password='$password'");
      

    }

    if($login_type=='corporate')
    {
       $res=mysqli_query($conn,"SELECT * FROM `corporate` WHere user_id='$username' And password='$password'");

    }
       if($login_type=='dealer')
    {
       $res=mysqli_query($conn,"SELECT * FROM `deaer` WHere username='$username' And password='$password'");

    }


    

    $ros=mysqli_fetch_array($res);

  // /print_r($ros);

  if($ros)
  {
    session_start();
    
    $_SESSION['user']=$login_type;
    $_SESSION['username']=$username;

    echo"<script>alert('login success');window.location='home.php'</script>";
  }
  else {
    echo"<script>alert('login error');window.location='index.php';</script>";
  }

     


  }



  ?>