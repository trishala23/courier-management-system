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
    <h3 class="blank1">View Branch</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
            
            <th>Book Id</th>
            <th>Ccn</th>
              <th>Shi name</th>
              <th>shi asddress</th>
              <th>phone</th>
              <th>material</th>
              <th>item</th>
              <th>Braid</th>
              <th>book branch</th>
              <th>bra location</th>
              <th> booking</th>
              <th>Destination</th>
              <th>charge</th>
              <th>C id</th>
              <th>Reciver name</th>
              <th>Reciver address</th>
              <th>Reciver phone</th>

            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from consignment";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            
             <td><?php echo $ros['booking_id'];?></td>
             <td><?php echo $ros['ccn'];?></td>

            <td><?php echo $ros['shippername'];?></td>
            <td><?php echo $ros['shipperasddress'];?></td>
            <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['material_descrption'];?></td>
            <td><?php echo $ros['no_of_item'];?></td>
            <td><?php echo $ros['branch_id'];?></td>
             <td><?php echo $ros['booked_at_branch'];?></td>
            <td><?php echo $ros['branchlocation'];?></td>
            <td><?php echo $ros['date_of_booking'];?></td>
            <td><?php echo $ros['destination'];?></td>

            <td><?php echo $ros['shipment_charge'];?></td>
            
            <td><?php echo $ros['corporate_id'];?></td>
            <td><?php echo $ros['reciver_name'];?></td>

                  <td><?php echo $ros['reciver_address'];?></td>
            <td><?php echo $ros['reciver_phone'];?></td>
            

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

<?php

include('footer.php');


if(isset($_REQUEST['deleteid']))
{

$id=$_REQUEST['deleteid'];

$sql="DELETE FROM `branch` WHERE `branch`.`id` = '$id'";


    $res=mysqli_query($conn,$sql);

    if($res)
    {
      echo"<script>alert('Delete sucessfully');window.location='branch_details.php'</script>";
    }
    else
    {
      echo"<script>alert('data Delete error');window.location='branch_details.php'</script>";

    }


}
?>
