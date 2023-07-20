<?php

require_once("guard/customerguard.php");
  require_once("partials/header1.php");

  require_once("classes/User.php"); //to get the details of the user

$cust_id = $_SESSION["user_id"];

$userone = new User();
$user = $userone->getUserDetails($cust_id);

//print_r($user);
//die();
?>
   
   <?php  require_once("partials/sidebar.php");?>

       <h2 class="text-center">Change Password</h2>
       <form action="process/processpasswordchangecust.php" method="post">

       <?php
                if(isset($_SESSION["sum_form_error"])){
                echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
                unset($_SESSION["sum_form_error"]);
                }
                ?>
                
            <div class="mb-3">
                <label for="oldpassword" class="form-label">Old Password</label>
                <input type="password" class="form-control" id="oldpassword" name="oldpassword" aria-describedby="emailHelp" value="<?php //echo $user["user_fullname"];?>">
            </div>
            <div class="mb-3">
                <label for="newpassword" class="form-label">New Password</label>
                <input type="password" class="form-control" id="newpassword" name="newpassword" aria-describedby="emailHelp" value="<?php //echo $user["user_fullname"];?>">
            </div>
          
            
            <button type="submit" class="btn btn-danger" name="changepassword">Change Password</button>
       </form>
       
      </div>
    </div>
  </div>

 
</div>
</div>
      
    <?php
      require_once("partials/footer.php");
    ?>