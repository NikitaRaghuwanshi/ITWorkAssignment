<?php include "vertical_nav.php";?>

	<!-- <div class="container-fluid"> -->
	<!-- <div class="row"> -->
	<!-- <div class="col-sm-3"></div>	 -->
	<div class="col-sm-9">	
   <table class="table table-bordered table-hover">
    <thead>
    <tr class="active">
    <th>USER ID</th>
    <th>USER CITY</th>
    <th>USER STATE</th>
    <th>USER ADDRESS</th>
    <th>USER PINCODE</th>
  </tr>
</thead>
<tbody>

<?php 
  include '../Model/db_connection.php';

  $query="SELECT * FROM user_details";
  $result=$con->query($query);
  if($result->num_rows>0){
    while($data=$result->fetch_assoc()){?>
    <tr>
      <td><?php echo $data['user_id'];?></td>
      <td><?php echo $data['user_city'];?></td>
      <td><?php echo $data['user_state'];?></td>
      <td><?php echo $data['user_address'];?></td>
      <td><?php echo $data['user_pincode'];?></td>
    </tr>
 <?php }
}
?>

</tbody>
  </table>
<!-- </div> -->
<!-- </div> -->
</div>
</body>
</html>