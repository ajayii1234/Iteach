<?php
session_start();
require_once("Dbconnection.php");

class Tracker extends Dbconnection
{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function tracker($session, $title, $content, $status, $date, $owner_id)
    {
        $sql = "INSERT INTO tracker (tracker_section, tracker_title, tracker_content, tracker_status, tracker_date, tracker_user) VALUES (?, ?, ?, ?, ?, ?)";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$session, $title, $content, $status, $date, $owner_id]);

            if ($stmt->rowCount() > 0) {
                return "Tracker created successfully";
            } else {
                return "Unable to create tracker";
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

            //method to fetch all records from the database
            public function fectchAllrecords(){
                $sql = "SELECT * FROM tracker";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                //fetchAll() is an inbuilt function to retrieve the value of your database
                //FETCH_ASSOC gives you access to the associative array
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }

                        //method to fetch all records from the database
                        public function fectcharecord(){
                            $sql = "SELECT * FROM tracker INNER JOIN user on tracker.tracker_user = user.user_id";
                            $stmt = $this->connect()->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            return $result;
                        }

                                 //method to update profile in a database
        public function updatetracker($section, $title, $content, $ability, $date, $tracker_id){
            $sql = "UPDATE tracker SET tracker_section=?, tracker_title=?, tracker_content=?, tracker_status=?, tracker_date=? WHERE tracker_id=?";
            $stmt = $this->conn->prepare($sql);
            $response = $stmt->execute([$section, $title, $content, $ability, $date, $tracker_id]);
            return $response;
        }
}
?>


