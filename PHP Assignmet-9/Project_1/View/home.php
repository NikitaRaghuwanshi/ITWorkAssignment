<?php include "vertical_nav.php"?>
  
  <style>
    #icon{
      color: Blue;
      /*background-color: skyblue;
      border-radius: 25px;*/
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
    .well{
      background-color: rgba(0,0,0,0.4);
    }
  </style>

  <div class="col-sm-2">  
  <div class="well">

    <div class="row">
      <div class="col-sm-6">
        <i class='bx bx-group icon icon1' id="icon"></i>
      </div>
 
      <div class="col-sm-6">
        <b><?php include "../Model/db_user_count.php"?></b>
        <p>USERS</p>
    </div> 
    </div>

  </div>

</body>
</html>