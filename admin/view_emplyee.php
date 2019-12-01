<?php 

include('header.php');
include('sidebar.php');
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
    <h3 class="blank1">View Emplyee</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
            <th>Emp id</th>
              <th>Branch id</th>
              <th>Name</th>
              <th>Branch Name</th>
              <th>Branch location</th>
              <th>Date of join</th>
              <th><S></S>alary</th>
           
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from emplyee";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            <td><?php echo $i++;?></td>
             <td><?php echo $ros['Empid'];?></td>
            <td><?php echo $ros['branchid'];?></td>
            <td><?php echo $ros['name'];?></td>
            <td><?php echo $ros['branch_name'];?></td>
            <td><?php echo $ros['branch_location'];?></td>
            <td><?php echo $ros['dateofjoin'];?></td>
            <td><?php echo $ros['salary'];?></td>
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
