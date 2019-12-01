<?php 

include('header.php');
include('../connection.php');
session_start();
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
    <h3 class="blank1" align="center">View Consignments</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="80%" cellspacing="0">
          <thead>
            <tr>
            
            
            <th>Ccn</th>
              <th>Sender name</th>
              <th>sender address</th>
              <th>phone</th>
              <th>material</th>
              <th>item</th>
              <th>Branch id</th>
              <th>book at branch</th>
              
              <th> booking date</th>
              
              <th>charge</th>
              
              <th>Reciver name</th>
              <th>Reciver address</th>
              <th>Reciver phone</th>

            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from consignment where shippername='{$_SESSION['username']}'";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            
      
             <td><?php echo $ros['ccn'];?></td>

            <td><?php echo $ros['shippername'];?></td>
            <td><?php echo $ros['shipperasddress'];?></td>
            <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['material_descrption'];?></td>
            <td><?php echo $ros['no_of_item'];?></td>
            <td><?php echo $ros['branch_id'];?></td>
             <td><?php echo $ros['booked_at_branch'];?></td>
          
            <td><?php echo $ros['date_of_booking'];?></td>
        

            <td><?php echo $ros['shipment_charge'];?></td>
            
          
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
