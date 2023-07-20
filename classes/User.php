<?php
session_start();
require_once("Dbconnection.php");

class User extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function registerUser($user_firstName, $user_lastName, $user_email, $user_phoneNumber, $user_gender, $user_address, $user_password, $user_confirmPassword, $user_image, $user_state){

        //check if email in db before trying to store user, also trying to fetch a data,
        //we use the statement rowCount()
        $sql = "SELECT * FROM user WHERE user_email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$user_email]);
        $email = $stmt->rowCount();
        if($email > 0){
            //return "Error: This email already in use";
            //exit;

            $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>This email is already in use</p>";
            header("location:../userregister.php");
            exit();
        }

                //check if phone number is already in db before trying to store user, also trying to fetch a data,
        //we use the statement rowCount()
        $sql = "SELECT * FROM user WHERE user_phoneNumber = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$user_phoneNumber]);
        $numUsers = $stmt->rowCount();
        if($numUsers > 0){
            //return "Error: This phone number is already in use";
            //exit;

            $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>This phone number is already in use<p>";
            header("location:../userregister.php");
            exit();
        }

        //methods should not be too long and they should perform only one thing

        $sql = "INSERT INTO user(user_firstName, user_lastName, user_email, user_phoneNumber, user_gender, user_address, user_password, user_confirmPassword, user_image, user_state) VALUES(?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $user = $stmt->execute([$user_firstName, $user_lastName, $user_email, $user_phoneNumber, $user_gender, $user_address, $user_password, $user_confirmPassword, $user_image, $user_state]);
        
        //to check if variables is in the database

        if($user){
            $_SESSION["sum_form_error"] = "<p class='alert alert-success text-center'>Your registration was successful<p>";
            header("location:../login.php");
        }

    }


    public function loginUser($email, $password){

        //check if email in db before trying to store user, also trying to fetch a data,
//we use the statement rowCount()
$sql = "SELECT * FROM user WHERE user_email = ?";
$stmt = $this->conn->prepare($sql);
$stmt->execute([$email]);

$numUsers = $stmt->rowCount();

if($numUsers < 1){
    //return "Either email or Password is not correct";
    $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>Either email or Password is not correct</p>";
    header("location:../login.php");
    exit();
   
}
//return $numUsers;

//this is to fetch data from the database
$user = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r($user);

//this is the password that is saved in the database
//$user["user_password"];

//this is to verify if the password that the user entered is the same with the one in the database
if(password_verify($password, $user["user_password"])){
//return "You are logged in";


session_start();
//left handside: user id that is in the db, store it in the session
$_SESSION["user_id"] = $user["user_id"];


//redirects based on role
if($_SESSION["user_id"]){
   
    header("location:../userprofile.php");
    exit();
}else{
    session_destroy();
    header("location:../index1.php");
    exit();
}

}else{
    $_SESSION["sum_form_error"] = "<p class='alert alert-danger text-center'>Either email or Password is not correct</p>";
    header("location:../login.php");
    exit();
}

    }


       //method to fetch all customers from the database
       public function fectchAllusers(){
        $sql = "SELECT * FROM user";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        //fetchAll() is an inbuilt function to retrieve the value of your database
        //FETCH_ASSOC gives you access to the associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



         //method to update profile in a database
        public function updateProfile($fname, $lname, $address, $image, $user_id){
        $sql = "UPDATE user SET user_firstName=?, user_lastName=?, user_address=?, user_image=? WHERE user_id=?";
        $stmt = $this->conn->prepare($sql);
        $response = $stmt->execute([$fname, $lname, $address, $image, $user_id]);
        return $response;
    }

    //method to get user details using the ID
        public function getUserDetails($user_id){
        $sql = "SELECT * FROM user WHERE user_id=?";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$user_id]);
        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

    public function deleteUser($user_id){
        $sql = "DELETE FROM user WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $userdeleted = $stmt->execute([$user_id]);
        if($userdeleted){
            header("location:../iteach/viewallusers.php");
            exit();
        }
    }

    //method to update customer password
    public function updateCustomerPassword($oldpassword, $newpassword, $user_id){
        $sql = "SELECT * FROM user WHERE user_id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        //return $user;
        //checking if the password they provided matches with the password stored for them
        if(password_verify($oldpassword, $user["user_password"])){
            $sql = "UPDATE user SET user_password = ? WHERE user_id = ?";
            $stmt = $this->conn->prepare($sql);
            $updatedUser = $stmt->execute([$newpassword, $user_id]);
             //return "Your password has been changed successfully";
             $_SESSION["sum_form_error"] = "<span class='alert alert-sucess'>Your password has been changed successfully</span>";
             header("location:../changepasswordcust.php");
        }else{//return "Old password is not correct, please try again";
            $_SESSION["sum_form_error"] = "<span class='alert alert-danger'>Old password is not correct, please try again</span>";
            header("location:../changepasswordcust.php");}
    }




}

