<?php
session_start();

require_once ('config.php');
$error='';

//declaring variable to fetch data from input field. In loginform name element is used for each input where user entered value is 
//saved. Saving those values to new declared variable here

  $username = $_POST['username'];
  $password = $_POST['password'];
  $error = "Incorrect username or password. Please enter valid address!";
  
  //This SQL query to fetch the data from crude database in user table where all user's username and password is stored.
  
 $sql = "select * from user where email='$username' and password='$password'";

//Using PHP Data Objects connecting database to fetch the query result from user table and saving it in result variable

$result = $pdo->query($sql);

//If the given input doesn't return any result to the query then session starts to display the error else it will land to index page

if (!$row = $result -> fetch(PDO::FETCH_ASSOC)){
  $_SESSION["error"] = $error; 

 header ("Location: Loginandsignup.php");
  
  
 
} else {
  header("Location: Bib_Mainpage.php");
}


?>