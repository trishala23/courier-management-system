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
    <h3 class="blank1" align="center">View Reciver</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-hover" id="example" class="display" width=80%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
            <th>Receiver ID</th>
              <th>CCN</th>
              <th>Receiver Name</th>
              <th>Receiver phone no</th>
              <th>Book at branch</th>
              <th>matarial Description</th>
          
              <th>Date of receive</th>
              <th>Name of Receive</th>
              <th>Relation</th>
              <th>Dispatcher name</th>
                <th>DispatcherID</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from receiver";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            <td><?php echo $i++;?></td>
            
            <td><?php echo $ros['receiver_id'];?></td>
             <td><?php echo $ros['ccn'];?></td>
            <td><?php echo $ros['receiver_name'];?></td>
            <td><?php echo $ros['reciverphoneno'];?></td>
            <td><?php echo $ros['BookedAt'];?></td>
            <td><?php echo $ros['Material'];?></td>
            
            <td><?php echo $ros['dateofreceive'];?></td>

            <td><?php echo $ros['recivername'];?></td>
            <td><?php echo $ros['relation'];?></td>
            <td><?php echo $ros['Dispatchername'];?></td>
            <td><?php echo $ros['DispatcherID'];?></td>
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


