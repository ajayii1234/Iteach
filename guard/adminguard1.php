<?php

require("classes/Contact.php");

if (!isset($_SESSION["admin_id"])) {
    header("location: login.php");
    exit();
}



?>