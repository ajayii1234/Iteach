<?php

    require_once "../classes/Admin.php";

if($_POST){

    if(isset($_POST["button"])){
        //echo print_r($_POST);
        //echo "you clicked register button";

        $email = $_POST["email"];
        $password = $_POST["password"];
       

        //echo print_r($_POST);

        //validate empty fields
        if(empty($email) || empty($password)){

            echo "All fields are required";
          
            exit();
        }

    }

    $userone = new Admin();
    $result = $userone->loginUser($email, $password);  
    echo $result;


}else{
    //header("location: ../adminlogin.php");
}


?>