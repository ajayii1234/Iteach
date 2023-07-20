<?php


require_once("../classes/Tracker.php");
if($_POST){
    if(isset($_POST["updatebtn"])){

        

        $tracker_id = $_POST["tracker_id"];
        $section = $_POST["section"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $ability = $_POST["ability"];
        $date = $_POST["date"];

        $user1 = new Tracker();
       
        $response = $user1->updatetracker($section, $title, $content, $ability, $date, $tracker_id);
       // print_r($response);
        //die();
        if($response){
            header("location:../updatetracker.php");
            exit();
        }
    }
}


?>