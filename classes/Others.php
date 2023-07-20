<?php

require_once("Dbconnection.php");

class User extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }


    //method to get user details using the ID
    public function GetUserDetails($user_id){
        $sql = "SELECT * FROM user WHERE user_id=?";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$user_id]);
        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

}