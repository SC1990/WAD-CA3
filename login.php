<?php
include 'header.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$logquery = "SELECT * FROM accdet WHERE uname='$user' AND pword='$pass'";
$result = $conn ->query($logquery);

if(!$row = $result->fetch_assoc()){
  echo "Invalid username or password.";
}
else{
	
  $_SESSION['id'] = $row['id'];
  $_SESSION['first'] = $row['first'];
  $loggedIn = true;
}
header("Location: index.php");