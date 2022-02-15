<?php include "vertical_nav.php"?>
  
  <style>
    #icon{
      color: Blue;
      background-color: skyblue;
      border-radius: 25px;
      font-size: 50px;
    }
    b{
      font-size: 20px;
      color: blue;
    }
    p{
      color: Blue;
      font-weight: bold;
    }
  </style>

  <div class="col-sm-9">  
  <div class="well">
  <h3>Statistics</h3>
   
    <div class="row">
	    <div class="col-sm-9">
        
        <div class="col-sm-3">
	      <i class='bx bx-group icon icon1' id="icon"></i>
	      </div>

        <div class="col-sm-9">
        <b><?php include "../Model/db_user.php"?></b>
        <p>USERS</p>
        </div>
			
		  </div>
    </div>
    </div>
  </div>

</body>
</html>