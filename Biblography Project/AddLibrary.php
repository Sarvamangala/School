<?php
session_start();
include 'config.php';
include 'signup1.php';

$email = $_POST['email'];
$name = $_POST['firstname'];

$sql = "INSERT INTO library (libraryID, Displayname, userid) 
 VALUES ('', '$name', '$email')";

$result = $pdo->query($sql);

header("Location: Bib_Mainpage.php");
?>