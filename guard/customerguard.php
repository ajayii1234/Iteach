<?php

require_once "classes/User.php";

if (!isset($_SESSION["user_id"])) {
    header("location: login.php");
    exit();
}



?>