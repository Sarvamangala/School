<?php
session_start();
include 'config.php';

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
$emailerr="";

if (empty($_POST["email"])) {
    $emailerr = "Email is required";
   $_SESSION["emailerr"] = $emailerr; 
  } else {
  function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid email format"; 
      $_SESSION["emailerr"] = $emailerr; 
    }
  }
  
 $sql = "INSERT INTO user (firstname, lastname, email, password) 
 VALUES ('$firstname', '$lastname', '$email', '$password')";
$result = $pdo->query($sql);

header("Location: Loginandsignup.php");