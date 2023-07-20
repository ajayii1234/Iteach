<?php

require_once("Dbconnection.php");

class Admin extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }


    public function loginUser($email, $password){

        //check if email in db before trying to store user, also trying to fetch a data,
//we use the statement rowCount()
$sql = "SELECT * FROM admins WHERE admin_email = ?";
$stmt = $this->conn->prepare($sql);
$stmt->execute([$email]);

$numUsers = $stmt->rowCount();

if($numUsers < 1){
    return "Either email or Password is not correct";
    exit();    
}
//return $numUsers;

//this is to fetch data from the database
$user = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r($user);

//this is the password that is saved in the database
//$user["user_password"];

//this is to verify if the password that the user entered is the same with the one in the database
if(password_verify($password, $user["admin_password"])){
//return "You are logged in";


session_start();
//left handside: user id that is in the db, store it in the session
$_SESSION["admin_id"] = $user["admin_id"];
// $_SESSION["user_fullname"] = $user["user_fullname"];
// $_SESSION["user_email"] = $user["user_email"];
// $_SESSION["user_Intro"] = $user["user_Intro"];
// $_SESSION["user_dp"] = $user["user_dp"];
//$_SESSION["cust_role"] = $user["cust_role"];
// $_SESSION["user_created"] = $user["user_created"];

header("location:../adminprofile.php");

//redirects based on role
// if($user["cust_role"] === "customer"){
//     header("location:../customerprofile.php");
//     exit();
// }elseif($user["cust_role"] === "repairer"){
//     header("location:../repairerprofile.php");
//     exit();
// }else{
//     session_destroy();
//     header("location:../index.php");
//     exit();
// }

}

    }


      


}

