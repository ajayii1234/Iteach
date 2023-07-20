<?php

    require_once "../classes/User.php";
    require_once "../sanitizer.php";
   
if($_POST){

    if(isset($_POST["button"])){
        //echo print_r($_POST);
        //echo "you clicked register button";

        $firstname = sanitizer($_POST["firstname"]);
        $lastname = sanitizer($_POST["lastname"]);
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $email = sanitizer($_POST["email"]);
        $phone = sanitizer($_POST["phone"]);
        $addr = sanitizer($_POST["addr"]);
        $state = $_POST["state"];

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        
     
        //echo print_r($_POST);

        //validate empty fields
        if(empty($firstname) || empty($lastname) || empty($password) || empty($confirmpassword) || empty($email) || empty($phone) || empty($gender) || empty($state)){

            $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>All fields with &nbsp<span style='color:red'>*</span> are required</p>";
            header("location:../userregister.php");
            exit();
        }else{ 
            //echo "Success";
        }

        //validate password length
        if(strlen($password) < 8){
            
            $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>Minimum length of password is eight characters</p>";
            header("location:../userregister.php");
            exit();
        }

        if($password !== $confirmpassword){
            
            $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>Password and confirm password must be the same</p>";
            header("location:../userregister.php");
            exit();
        }

    }
    //harsh password and confirm password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $confirmpassword = password_hash($confirmpassword, PASSWORD_DEFAULT);
    //echo $password;
    //exit();
    
      //image validation from file upload
      $allowed = ["jpeg", "png", "jpg", "webp", "jfif"];
      $file_name = $_FILES["cover"]["name"];
      $temp = $_FILES["cover"]["tmp_name"];
      $error = $_FILES["cover"]["error"];
      //strtolower converts from uppercase to lowercase eg PNG, JPG
      $uploaded_ext =strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
      if(!in_array($uploaded_ext, $allowed)){
          //echo "File type not allowed. Please upload Image";
          $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>File type not allowed. Please upload Image</p>";
          header("location:../userregister.php");
          exit();
      }
      
      if($error == 0){
          $fileName = "uploads/"."I-teach".time(). ".".$uploaded_ext;
          $savedfile = move_uploaded_file($temp, $fileName);

          if($savedfile){
            $userone = new User();
            $response = $userone->registerUser($firstname, $lastname, $email, $phone, $gender, $addr, $password, $confirmpassword, $fileName, $state);
            echo $response;
          }
        }


}else{
    header("location: ../userregister.php");
}


?>