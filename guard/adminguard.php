<?php

require_once "classes/User.php";

if (!isset($_SESSION["admin_id"])) {
    header("location: login.php");
    exit();
}



?>