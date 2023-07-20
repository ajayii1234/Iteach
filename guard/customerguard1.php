<?php

require("classes/Tracker.php");

if (!isset($_SESSION["user_id"])) {
    header("location: login.php");
    exit();
}



?>