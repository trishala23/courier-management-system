<?php 

include('header.php');
include('sidebar.php');
include('../connection.php');

$From=$_REQUEST['From'];
$to=$_REQUEST['to'];





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
    <h3 class="blank1">View Consignment list</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
            <th>CCn</th>
              <th>Shipper name</th>
              <th>Shipper address</th>
              <th>Material Description</th>
              <th>No of item</th>
              <th>Total weight</th>
              <th>Book at branch</th>
              <th>Location</th>
              <th>Booking Date</th>
              <th>Destination</th>
              <th>Shipment Charge</th>
              <th>status</th>
              
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="SELECT * FROM `consignment` WHERE `date_of_booking` LIKE '%$From%' OR `date_of_booking` LIKE '%$to%'";
            $res=mysqli_query($conn,$sql);
            $i=1;
            $total=0;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>
            <td><?php echo $i++;?></td>
             <td><?php echo $ros['ccn'];?></td>
            <td><?php echo $ros['shippername'];?></td>
            <td><?php echo $ros['shipperasddress'];?></td>
            <td><?php echo $ros['material_descrption'];?></td>
            <td><?php echo $ros['no_of_item'];     
            ?></td>
            <td><?php echo $ros['total_weight'];?></td>
            <td><?php  $branch=$ros['booked_at_branch'];

            		$res1=mysqli_query($conn,"select * from branch where branch_id='$branch'");
            		$rss=mysqli_fetch_array($res1);

            		echo $rss['branchaddress'];

            ?></td>

             <td><?php echo $ros['branchlocation'];?></td>
             <td><?php echo $ros['date_of_booking'];?></td>
             <td><?php echo $ros['destination'];?></td>
             <td><?php echo $ros['shipment_charge'];
             		   $total=$total+$ros['shipment_charge'];?></td>
             <td>consignment Recived by<?php echo $ros['reciver_name'];?> relation friend</td>
          </tr>
          <?php

        }
        ?>

        <Tr>
        <td colspan="3">Total charge:-</td>
        <td colspan="3"><h4><?php echo  $total;?></h4></td>
        <td colspan="7"><a href="" id="click">Downlaod to Excel</a></td>
        </Tr>


       

          </tbody>


        </table>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
$(function(){
    $('#click').click(function(){
        var url='data:application/vnd.ms-excel,' + encodeURIComponent($('#tableWrap').html()) 
        location.href=url
        return false
    })
})
</script>