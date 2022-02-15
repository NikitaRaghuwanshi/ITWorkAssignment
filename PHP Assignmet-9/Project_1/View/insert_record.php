<?php include "vertical_nav.php"?>
 
	<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
    <div class="col-sm-9">

  <h2 style="text-align: center;">Insert Record</h2>
  <form action="../Model/db_form.php" method="post">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label for="f_name">Full Name</label>
          <input type="text" class="form-control" id="f_name" placeholder="Full Name" name="company_name" required="">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label for="agency">Insurance Agency Name</label>
          <input type="text" class="form-control" id="agency" placeholder="Insurance Agency Name" name="company_agency" required="">
        </div>
      </div>
    </div>

    <div class="row">
  	<div class="col-lg-6">
    	<div class="form-group">
    	<label for="email">Email</label>
    	<input type="email" class="form-control" id="email" placeholder="Email" name="company_email" required="">
    	</div>
	</div>
  	<div class="col-lg-6">
    	<div class="form-group">
    	<label for="password">Password</label>
    	<input type="password" class="form-control" id="password" placeholder="Password" name="company_password" required="">
    	</div>
	</div>
	</div>


    <div class="row">
  	<div class="col-lg-6">
    	<div class="form-group">
      	<label for="created_date">Created Date</label>
      	<input type="date" class="form-control" id="created_date" name="company_created" required="">
    	</div>
    </div>
  	
    <div class="col-lg-6">	
    	<div class="form-group">
      	<label for="status">Status</label>
      	<input type="text" class="form-control" id="status" placeholder="Status" name="company_status" required="">
    	</div>
    </div>	

    <div class="col-lg-6">  
      <div class="form-group">
        <label for="user_city">User City</label>
        <input type="text" class="form-control" id="user_city" placeholder="User City" name="user_city" required="">
      </div>
    </div>  

    <div class="col-lg-6">  
      <div class="form-group">
        <label for="user_state">User State</label>
        <input type="text" class="form-control" id="user_state" placeholder="User State" name="user_state">
      </div>
    </div>  

    <div class="col-lg-6">  
      <div class="form-group">
        <label for="user_address">User Address</label>
        <input type="text" class="form-control" id="user_address" placeholder="User Address" name="user_address">
      </div>
    </div>  

    <div class="col-lg-6">  
      <div class="form-group">
        <label for="user_pincode">User Pincode</label>
        <input type="number" class="form-control" id="user_pincode" placeholder="User Pincode" name="user_pincode">
      </div>
    </div>  

    <div class="form-group form-check">&nbsp;&nbsp;&nbsp;&nbsp;
      	<label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      	</label>
    	</div>

      <div class="col-lg-12" style="text-align: center;">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>
</div>
</div>
 </div>
</div>
</body>
</html>