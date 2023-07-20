<?php
    
    require_once "../classes/User.php";

if($_POST){

    if(isset($_POST["button"])){
        //echo print_r($_POST);
        //echo "you clicked register button";


        $email = $_POST["email"];
        $password = $_POST["password"];
       

        //echo print_r($_POST);

        //validate empty fields
        if(empty($email) || empty($password)){

            $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>All fields are required</p>";
            header("location:../login.php");
            exit();
        }
        elseif(strlen($password) < 8){
            
            $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>Minimum length of password is eight characters</p>";
            header("location:../login.php");
            exit();
        }

    }

    $userone = new User();
    $result = $userone->loginUser($email, $password);  
    echo $result;


}else{
    header("location: ../index1.php");
}


?>