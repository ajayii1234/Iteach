<?php

require_once("guard/customerguard.php");
  require_once("partials/header1.php");

  require_once("classes/User.php"); //to get the details of the user

$user_id = $_SESSION["user_id"];

$userone = new User();
$user = $userone->getUserDetails($user_id);

//print_r($user);
//die();
?>
   
   <?php require_once("partials/sidebar.php");?>
   
       <h2 class="text-center">Edit Profile</h2>
       <form action="process/processuserupdate.php" method="post" enctype="multipart/form-data">
       <?php
                if(isset($_SESSION["sum_form_error"])){
                echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
                unset($_SESSION["sum_form_error"]);
                }
                ?>

          <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" value='<?php echo $user["user_firstName"];?>'>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="emailHelp" value='<?php echo $user["user_lastName"];?>'>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="address" class="form-control" id="address" name="address" aria-describedby="emailHelp" value='<?php echo $user["user_address"];?>'>
            </div>
            <div class="mb-3">
            <label for="cover">Change Picture</label>
            <input type="file" id="cover" name="cover" class="form-control">
            </div>
          
            <button type="submit" class="btn btn-danger" name="updatebtn">Update Profile</button>
       </form>
       
      </div>
    </div>
  </div>

 
</div>
</div>
      
    <?php
      require_once("partials/footer.php");
    ?>