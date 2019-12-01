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
    <h3 class="blank1" align="center">View Delivery</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="80%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
            <th>Delivery ID</th>
              <th>ccn</th>
              <th>Book at branch</th>
              <th>shipper name</th>
              <th>Delivered at branch</th>
              <th>Dealer Name</th>
              <th>Date of Delivery </th>
              
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from delivery";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>
            <td><?php echo $i++;?></td>
             <td><?php echo $ros['deliveryid'];?></td>
            <td><?php echo $ros['ccn'];?></td>
            <td><?php echo $ros['bookatbranch'];?></td>
            <td><?php echo $ros['shippername'];?></td>
            <td><?php $branch= $ros['deliveryedatbranch'];

             $sql1="Select * from branch where branch_id='$branch'";
            $res2=mysqli_query($conn,$sql1);
            $ros2=mysqli_fetch_array($res2);
            echo $ros2['branchaddress'];
            ?></td>
            <td><?php echo $ros['dealername'];?></td>
            <td><?php echo $ros['dateofdelivery'];?></td>
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

