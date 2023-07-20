<?php
session_start();
require_once("Dbconnection.php");

class Contact extends Dbconnection{

    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function contactus($name, $email, $message){
        

        //methods should not be too long and they should perform only one thing

        $sql = "INSERT INTO contact_us(contact_name, contact_email, contact_message) VALUES(?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $user = $stmt->execute([$name, $email, $message]);
        
        //to check if variables is in the database

        if($user){
            //return "Message sent successfully";
            $_SESSION["submit"] = "Message sent successfully";
            header("location:../contactform.php");
        }else{
            return "unable to create user";
        }

    }


         //method to fetch each customer request from the database
         public function contactmessage(){

             $sql = "SELECT * FROM contact_us";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // echo "<pre>";
            //  print_r($result);
            //  echo "</pre>";
            //  die();
            return $result;

          
        }

}

