<?php

require_once("partials/header1.php");
require_once("classes/User.php");

 if(isset($_GET["id"])){
     $user_id = $_GET["id"];

     if(empty("$user_id")){
        header("location../index.php");
     }
     $user = new User();
     $users = $user->getUserDetails($user_id);

//  echo "<pre>";
//      print_r($users);
//      "</pre>";

 }else{
     header("location:index.php");
     exit();
 }
?>


<h1>User Details</h1>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <p> First Name: <?php echo $users["user_firstName"]?></p>
            <p> Last Name: <?php echo $users["user_lastName"]?></p>
            <p> Email: <?php echo $users["user_email"]?></p>
            <p> Phone Number: <?php echo $users["user_phoneNumber"]?></p>
            <p> Gender: <?php echo $users["user_gender"]?></p>
            <p> Address: <?php echo $users["user_address"]?></p>
            <p> Date Joined: <?php echo $users["user_created"]?></p>
            </div>
            <div class="col-md-6">
        </div>
    </div>


<?php
require_once("partials/footer.php");
?>