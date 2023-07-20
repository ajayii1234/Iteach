<?php

session_start();
require_once("../classes/Dbconnection.php");
require_once("../classes/Tracker.php");

if ($_POST) {
    if (isset($_POST["updatetracker"])) {
        $session = $_POST["section"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $status = $_POST["status"];
        $date = $_POST["date"];
        $owner_id = $_POST["owner_id"];

        if (empty($session) || empty($title) || empty($content) || empty($status) || empty($date)) {
            $_SESSION["sum_form_error"] = "All fields are required";
            header("location:../progresstracker.php");
            exit();
        } else {
            $tracker = new Tracker();
            $response = $tracker->tracker($session, $title, $content, $status, $date, $owner_id);

            if (strpos($response, "Error:") !== false) {
                $_SESSION["sum_form_error"] = $response;
            } else {
                $_SESSION["sum_form_error"] = "<span style='color:yellow'>Progress added to tracker successfully</span>";
            }

            header("location:../progresstracker.php");
            exit();
        }
    }
}
?>
