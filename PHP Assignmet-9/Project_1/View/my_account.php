<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
  <style>
    .card{
      margin-top: 5px;
    }
  </style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
  <div class="card">
    <div class="card-body">
 
  <h2 style="text-align: center;">My Account</h2>
  <form action="/action_page.php">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label for="f_name">Full Name</label>
          <input type="text" class="form-control" id="f_name" placeholder="Full Name" name="f_name">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label for="agency">Insurance Agency Name</label>
          <input type="text" class="form-control" id="agency" placeholder="Insurance Agency Name" name="agency">
        </div>
      </div>
    </div>

    <div class="row">
  	<div class="col-lg-6">
    	<div class="form-group">
    	<label for="email">Email</label>
    	<input type="email" class="form-control" id="email" placeholder="Email" name="email">
    	</div>
	</div>
  	<div class="col-lg-6">
    	<div class="form-group">
    	<label for="password">Password</label>
    	<input type="password" class="form-control" id="password" placeholder="Password" name="password">
    	</div>
	</div>
	</div>


    <div class="row">
  	<div class="col-lg-6">
    	<div class="form-group">
      	<label for="created_date">Created Date</label>
      	<input type="date" class="form-control" id="created_date" name="created_date">
    	</div>
    </div>
  	<div class="col-lg-6">	
    	<div class="form-group">
      	<label for="status">Status</label>
      	<input type="number" class="form-control" id="status" placeholder="Status" name="status">
    	</div>
    </div>	


    	<div class="form-group form-check">
      	<label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      	</label>
    	</div>

      <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>
</div>
</div>
 </div>

</body>
</html>