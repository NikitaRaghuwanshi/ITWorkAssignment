<?php 
include "../Model/db_connection.php";
include "vertical_nav.php";
?>
<style>
  .well{
      background-color: rgba(0,0,0,0.4);
    }
</style>
  <div class="col-sm-9">  
   <table class="table table-bordered table-hover">
    <thead>
    <tr class="info">
    <th>ID</th>
    <th>FULL NAME</th>
    <th>INSURANCE AGENCY NAME</th>
    <th>EMAIL</th>
    <!-- <th>PASSWORD</th> -->
    <th>CREATED DATETIME</th>
    <th>SESSION ID</th>
  </tr>
</thead>
<tbody>

<?php
    
    $user_name=$_SESSION['user_name'];

       $query="select * from company where company_email='$user_name'";

        $result=$con->query($query);

    
    while($fetch_records=$result->fetch_assoc()){?>
    <tr>
      <td><?php echo $fetch_records['company_id'];?></td>
      <td><?php echo $fetch_records['company_name'];?></td>
      <td><?php echo $fetch_records['company_agency'];?></td>
      <td><?php echo $fetch_records['company_email'];?></td>
     <!--  <td><php echo $fetch_records['company_password'];?></td> -->
      <td><?php echo $fetch_records['company_created'];?></td>
      <td><?php $session=session_id();echo ".$session;"?></td>
    </tr>
    <?php  }?>
    

</tbody>
  </table>
</div>
</body>
</html>