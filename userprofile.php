
<?php


  require_once("guard/customerguard.php");

  require_once("classes/User.php"); //to get the details of the user

$user_id = $_SESSION["user_id"];

$userone = new User();
$user = $userone->getUserDetails($user_id);

//print_r($user);
//die();

?>

<?php require_once("partials/header1.php");?>
   
<div class="container">
    
    <div class="row" style="background-color: #D1D4C9;">
  
    <div class="col-md-3 mb-4">
    <div class="card mt-4" style="border-radius: 20px;">
      <div class="card-header py-3" style="border-radius: 20px; border:2px solid grey">
      
        <h5 class="mb-0 text-center"><span><b><?php echo $user["user_firstName"]." " .$user["user_lastName"];?></b></span></h5>
      </div>
      <div class="card-body">
       <div class="row">
        <div class="col-12">
            <div class="text-center mb-3">
                
                <img src='<?php echo "process/".$user["user_image"]; ?>' class="img-fluid rounded-circle">

            </div>
             
            <hr>
             <div class="text-center">
             
            <span><i>Member From <?php echo date("d-m-y", strtotime($user["user_created"]))?> in <?php echo $user["user_state"];?></i></span>
        </div> 
        </div>

      
       </div>
      </div>
    </div>
  </div>


  <div class="col-md-9 mb-4">
    <div class="card mt-4" style="border-radius: 20px;">
      <div class="card-header py-3" style="border-radius: 20px;  border:2px solid grey">

      <h5 class="mb-0">Hello <?php echo $user["user_lastName"];?>! <span style="float: right;">   <form action="process/processlogout.php" method="POST">
    <input type="submit" value="Log Out" name="logoutbtn" id="logoutbtn" class="btn btn-danger">
    </form></span></h5>
    
      </div>
      <div class="card-body" style="min-height:200px">
      <?php

if(isset($_SESSION["sum_form_error"])){
 echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
 unset($_SESSION["sum_form_error"]);
}



 ?>
       
       <p><a href="userEditProfile.php" style="text-decoration:none;">Edit Profile</a></p>
       <p><a href="DefinitionFetcher.php" style="text-decoration:none;">Search a new Word</a></p>
       <p><a href="getanswers.php" style="text-decoration:none;">Get Answers</a></p>
       <p><a href="progresstracker.php" style="text-decoration:none;">Progress Tracker</a></p>
       <p><a href="learningstatus.php?id=<?php echo $user["user_id"];?>" style="text-decoration:none;">View Learning Status</a></p>
        <p><a href="changepasswordcust.php" style="text-decoration:none;">Change Password</a></p>
       
     
     
    </div>
    </div>
  </div>

 
</div>
</div>
      
    <?php
      require_once("partials/footer.php");
    ?>