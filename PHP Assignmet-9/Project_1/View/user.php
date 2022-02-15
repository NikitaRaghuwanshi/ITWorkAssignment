<?php include "vertical_nav.php";?>

	<!-- <div class="container-fluid"> -->
	<!-- <div class="row"> -->
	<!-- <div class="col-sm-3"></div>	 -->
	<div class="col-sm-9">	
   <table class="table table-bordered table-hover">
    <thead>
    <tr class="active">
    <th>ID</th>
    <th>FULL NAME</th>
    <th>INSURANCE AGENCY NAME</th>
    <th>EMAIL</th>
    <th>CREATED DATETIME</th>
    <th>STATUS</th>
  </tr>
</thead>
<tbody>

<?php 
  include '../Model/db_connection.php';

  $query="SELECT * FROM company";
  $result=$con->query($query);
  if($result->num_rows>0){
    while($data=$result->fetch_assoc()){?>
    <tr>
      <td><?php echo $data['company_id']; ?></td>
      <td><?php echo $data['company_name']; ?></td>
      <td><?php echo $data['company_agency']; ?></td>
      <td><?php echo $data['company_email']; ?></td>
      <td><?php echo $data['company_created']; ?></td>
      <td>
        <a href="../Model/update_form.php?id=<?php echo $data['company_id'];?>">
          <button class="btn btn-success">Update</button>
        </a>

        <a href="../Model/delete_form.php?id=<?php echo $data['company_id'];?>">
          <button class="btn btn-danger">Delete</button>
        </a>

      </td>
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