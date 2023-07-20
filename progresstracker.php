<?php

  require_once("guard/customerguard.php");
  require_once("partials/header1.php");

  require_once("classes/User.php"); //to get the details of the user

$user_id = $_SESSION["user_id"];

$userone = new User();
$user = $userone->getUserDetails($user_id);


    // if(isset($_GET['id'])){
    //     $repairer_id = $_GET['id'];
    // }
 
   // echo $repairer_id . " hello";
        $owner_id = $_SESSION["user_id"];

//print_r($user);
//die();
?>
   
   <?php require_once("partials/sidebar.php");?>
   
       <h2 class="text-center">Progress Tracker</h2>
       <form action="process/processprogresstracker.php" method="POST">

       <?php
                if(isset($_SESSION["sum_form_error"])){
                echo "<p class='text-danger'>". $_SESSION["sum_form_error"] ."</p>";
                unset($_SESSION["sum_form_error"]);
                }
                ?>

          <div class="mb-3">
                <label for="section" class="form-label">Choose section</label>
                <select class="form-control" aria-label="Default select example" name="section">
                                      <option selected>...choose an option...</option>
                                      <option value="word">Search a new Word</option>
                                      <option value="history">Get Answers</option>
                                      </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Enter Word or History Question</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Input Word Definition or History content</label>
                <textarea type="text" class="form-control" id="content" name="content" aria-describedby="emailHelp"></textarea>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Learning status</label>
                <select class="form-control" aria-label="Default select example" name="status">
                                    <option selected>Open this select menu</option>
                                      <option value="dont't understand">don't understand</option>
                                      <option value="still comprehending">still comprehending</option>
                                      <option value="fully understands">fully understands</option>
                                      
                                      </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp">
            </div>

            <input type="hidden" name="owner_id" value="<?php echo $owner_id;?>">  
          
            
            <button type="submit" class="btn btn-danger" name="updatetracker">Set Tracker</button>
       </form>
       
      </div>
    </div>
  </div>

 
</div>
</div>
      
    <?php
      require_once("partials/footer.php");
    ?>