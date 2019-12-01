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
    <h3 class="blank1" align="center">View Dealership Request</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="80%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
              <th>Request ID</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Date of apply</th>
              <th>Amount</th>
              <th>Brach location</th>
              <th>office address</th>
              <th>Pincode</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from dearship_request";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            <td><?php echo $i++;?></td>
            <td><?php echo $ros['reqid'];?></td>
            <td><?php echo $ros['name'];?></td>
            <td><?php echo $ros['address'];?></td>
            <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['applydate'];?></td>
            <td><?php echo $ros['amount'];?></td>
            <td><?php echo $ros['branch_location'];?></td>
            <td><?php echo $ros['office'];?></td>
            <td><?php echo $ros['pincode'];?></td>
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

