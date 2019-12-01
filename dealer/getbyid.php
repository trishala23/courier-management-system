<?php

include('../connection.php');
$id=$_REQUEST['id'];


$sql="Select * from dearship_request where reqid='$id'";
            $res=mysqli_query($conn,$sql);
            
              $ros=mysqli_fetch_array($res);

             
             $ras=array("status"=>"sucess","data"=>$ros);

             echo json_encode($ras);

          	




     



?>