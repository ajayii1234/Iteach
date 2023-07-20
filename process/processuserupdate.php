<?php


require_once("../classes/User.php");
if($_POST){
    if(isset($_POST["updatebtn"])){

        $user_id = $_SESSION["user_id"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        

    }

    //     $user1 = new User();
       
    //     $response = $user1->updateProfile($fname, $lname, $address, $user_id);
    //    // print_r($response);
    //     //die();
    //     if($response){
    //         header("location:../userprofile.php");
    //         exit();
    //     }
    




    //image validation from file upload
    $allowed = ["jpeg", "png", "jpg", "webp", "jfif"];
    $file_name = $_FILES["cover"]["name"];
    $temp = $_FILES["cover"]["tmp_name"];
    $error = $_FILES["cover"]["error"];
    //strtolower converts from uppercase to lowercase eg PNG, JPG
    $uploaded_ext =strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    if(!in_array($uploaded_ext, $allowed)){
        //echo "File type not allowed. Please upload Image";
        $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>Please upload Image</p>";
        header("location:../userEditProfile.php");
        exit();
    }
    
    if($error == 0){
        $fileName = "uploads/"."I-teach".time(). ".".$uploaded_ext;
        $savedfile = move_uploaded_file($temp, $fileName);

        if($savedfile){
            $user1 = new User();
       
        $response = $user1->updateProfile($fname, $lname, $address, $fileName, $user_id);
       // print_r($response);
        //die();
        if($response){
            // header("location:../userprofile.php");
            // exit();

            $_SESSION["sum_form_error"] = "<p class='alert alert-success text-center'>Profile updated successfully</p>";
            header("location:../userprofile.php");
            exit();
        }
        }
      }



}


?>