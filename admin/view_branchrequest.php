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
<div id="page-wrapper" align="center">
  <div class="graphs" align="center">
    <h3 class="blank1" align="center">View Branch</h3>

    <div class="xs tabls" align="center">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="80%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
            <th>Branch ID</th>
              <th>Request ID</th>
              <th>Branch Name</th>
              <th>Dealer Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Brach location</th>
              <th>Pincode</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from branch";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            <td><?php echo $i++;?></td>
             <td><?php echo $ros['branch_id'];?></td>
            <td><?php echo $ros['reqid'];?></td>
            <td><?php echo $ros['branch_name'];?></td>
            <td><?php echo $ros['dealer_name'];?></td>
            <td><?php echo $ros['branchaddress'];?></td>
            <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['branch_location'];?></td>
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


