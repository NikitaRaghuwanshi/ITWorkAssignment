<?php 

include "vertical_nav.php";?>
<style>
  #button{
  float: right;
  margin-right:20px;
  width: 10%;
  color: #fff;
  font-weight: bold;
  }
  .well{
      background-color: rgba(0,0,0,0.4);
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

	<a href="insert_record.php"><button type="button" class="btn btn-primary" id="button">Add +</button></a>
	<div class="col-sm-9"><br>	
   <table class="table table-bordered table-hover" id="myTable">
    <thead>
    <tr class="info">
    <th>ID</th>
    <th>FULL NAME</th>
    <th>INSURANCE AGENCY NAME</th>
    <th>EMAIL</th>
    <th>CREATED DATETIME</th>
    <th>STATUS</th>
  </tr>
</thead>
<tbody>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
});
  </script>

  <!-- session message -->
<div class="container-fluid">
     <div class="row">
     <div class="col">
     <?php if(isset($_SESSION['message'])): ?>
     <div class="alert alert-success">
     <?php echo $_SESSION['message']; ?>
     </div>
<?php endif; ?>
<?php unset($_SESSION['message']); ?>
     </div>
     </div>
    </div>

    <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    
    </script>

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
      <td><?php echo $data['company_created'];?></td>
      <td>
        <a href="../Model/update_form.php?id=<?php echo $data['company_id'];?>">
          <button class="btn btn-success">Update</button>
        </a>

       <!--  <a href="../Model/delete_form.php?id=<php echo $data['company_id'];?>">
          <button class="btn btn-danger" id="btn2" data-toggle="modal" data-target="#exampleModal">Delete</button>
        </a> -->

        <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" id="btn2" data-toggle="modal" data-target="#exampleModal_<?php echo $data['company_id'];?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal_<?php echo $data['company_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        Do you really want to delete record?
      </div>

      <div class="modal-footer">
         <a href="../Model/delete_form.php?id=<?php echo $data['company_id'];?>">
          <button type="button" class="btn btn-danger">Yes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
      </div>

    </div>
  </div>
</div>    

      </td>
    </tr>
 <?php }
}
?>

</tbody>
  </table>
</div>
</body>
</html>