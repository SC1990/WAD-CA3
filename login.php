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
	echo"logged in";
  //$_SESSION['id'] = $row['id'];
}
//header("Location: index.php");