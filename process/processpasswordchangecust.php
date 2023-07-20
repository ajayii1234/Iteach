<?php

require_once "../classes/User.php";



if($_POST){
    if(isset($_POST["changepassword"]))

    //echo "you clicked password";
    $oldpassword = $_POST["oldpassword"];    
    $newpassword = $_POST["newpassword"];
    $user_id = $_SESSION["user_id"];
    //hash the new password before sending it to the method
    $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);

    if(empty($oldpassword) || empty($newpassword)){
        //echo "all fields are required";
        $_SESSION["sum_form_error"] = "<span class='alert alert-danger'>All fields are required</span>";
        header("location:../changepasswordcust.php");
        exit();
    }
}

$userone = new User();
$result = $userone->updateCustomerPassword($oldpassword, $newpassword, $user_id); 
echo $result;


?>