<?php include "vertical_nav.php"?>
<style>
  .well{
    background-color: #e6f7ff;
  }
  input{
  border-radius: 5px;
  border: 1px solid #ccc;
  font-family: 'Lato';
}
input.error {
    border: 1px solid red;
    font-weight: 300;
    color: red;
}
.error{
  color: red;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

 <h3 style="text-align: center;">Insert Record</h3>
<div class="col-sm-9">
  <div class="well">
    <div class="row" >
      <div class="col-sm-12">

  
  <form action="../Model/db_insert_form.php" method="post" autocomplete="off" id="form_insert">

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="f_name">Full Name</label>
          <input type="text" class="form-control" id="f_name" placeholder="Full Name" name="company_name">
        </div>
      </div>
    
      <div class="col-lg-6">
        <div class="form-group">
          <label for="agency">Insurance Agency Name</label>
          <input type="text" class="form-control" id="agency" placeholder="Insurance Agency Name" name="company_agency">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name="company_email">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="company_password">
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
        <label for="created_date">Created Date</label>
        <input type="date" class="form-control" id="created_date" name="company_created">
      </div>
    </div>
    </div>    
   
  </div></div></div></div>

  <div class="col-sm-9">
  <div class="well">
    <div class="row" >
      <div class="col-sm-12">
       <!--  <h3 style="text-align: center;">Address Record</h3> -->

    <div class="row">
    <div class="col-lg-6">  
      <div class="form-group">
        <label for="user_city">User City</label>
        <input type="text" class="form-control" id="user_city" placeholder="User City" name="user_city">
      </div>
    </div> 


    <div class="col-lg-6">  
      <div class="form-group">
        <label for="user_state">User State</label>
        <input type="text" class="form-control" id="user_state" placeholder="User State" name="user_state">
      </div>
    </div> 
  </div>

  <div class="row">
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
    </div> 

    <input type="hidden" class="form-control" id="user_id" placeholder="User Pincode" name="user_id">

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
</div>
<!-- </div>
 </div> -->
</div>

<script>
$(document).ready(function() {
$("#form_insert").validate({
    rules: {

    company_name : {
    required: true,
    },

    company_agency: {
    required: true,
    },

    company_email: {
    required: true,
    email: true,
    },

    company_password:{
      required:true,
    },

    }
    });
    });
</script>
</body>
</html>