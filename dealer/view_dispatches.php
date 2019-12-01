<?php 

include('header.php');
include('../connection.php');

?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {

        $('#example').DataTable();
    });
</script>
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1" align="center">View Dispatch</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="80%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
              <th>Dispatch id</th>
              
              <th>Dispatcher id</th>
              <th>ccn</th>
              <th>sender_address</th>
              <th>shipper_name</th>
              <th>phone</th>
              <th>Reciver_name</th>
              <th>Reciver phoneno</th>
              <th>Reciver address</th>
              <th>Assignto</th>
              

              
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from dispatcher";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>
            <td><?php echo $i++;?></td>
             <td><?php echo $ros['dispatchid'];?></td>
            
            <td><?php echo $ros['dispatcher_Id'];?></td>

            <td><?php echo $ros['ccn'];?></td>
            <td><?php echo $ros['sender_address'];?></td>
            <td><?php echo $ros['shipper_name'];?></td>

             <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['reciver_name'];?></td>
            <td><?php echo $ros['reciver_phoneno'];?></td>
            <td><?php echo $ros['reciver_ address'];?></td>
             <td><?php $empid=$ros['dispatcher_Id'];

                 $ris=mysqli_query($conn,"SELECT * FROM  `emplyee` WHERE Empid ='$empid'");
                  $ras=mysqli_fetch_array($ris);

                  echo $ras['name'];

             ?>
               


             </td>
      

            


           <!--   $sql1="Select * from branch where branch_id='$branch'";
            $res2=mysqli_query($conn,$sql1);
            $ros2=mysqli_fetch_array($res2);
            echo $ros2['branchaddress'];
            ?></td> -->
          
          </tr>
          <?php

        }
        ?>
       

          </tbody>


        </table>
      </div>
    </div>
  </div>
</div>
