<?php include "vertical_nav.php";?>

  <div class="col-sm-9">  
   <table class="table table-bordered table-hover">
    <thead>
    <tr class="active">
    <th>ID</th>
    <th>FULL NAME</th>
    <th>INSURANCE AGENCY NAME</th>
    <th>EMAIL</th>
    <th>CREATED DATETIME</th>
    <th>USER CITY</th>
  </tr>
</thead>
<tbody>

<?php 
  include '../Model/db_connection.php';

  $query= "SELECT company.company_id, company.company_name,company.company_agency,company.company_email,company.company_created,user_details.user_city
           FROM company 
           INNER JOIN user_details
           ON company.company_id=user_details.user_id";

  $result=$con->query($query);
  if($result->num_rows>0){
    while($data=$result->fetch_assoc()){?>
    <tr>
      <td><?php echo $data['company_id'];?></td>
      <td><?php echo $data['company_name'];?></td>
      <td><?php echo $data['company_agency'];?></td>
      <td><?php echo $data['company_email'];?></td>
      <td><?php echo $data['company_created'];?></td>
      <td><?php echo $data['user_city'];?></td>
    </tr>
 <?php }
}
?>

</tbody>
</table>
</div>
</body>
</html> 