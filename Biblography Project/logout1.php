<?php
//It will create a session and then will destroy and will move back to login page

session_start();
session_destroy();
header("Location: Loginandsignup.php")
?>