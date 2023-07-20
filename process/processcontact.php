<?php


require_once("../classes/Contact.php");
if($_POST){
    if(isset($_POST["button"])){


        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        
        $user = new Contact();
       
        $response = $user->contactus($name, $email, $message);
        echo $response;
    }
}


?>