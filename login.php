<?php
include 'dbc.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$query = "SELECT * FROM usertable WHERE uname='$user' AND pwd='$pass'";
$result = $conn ->query($query);
if(!$row = $result->fetch_assoc()){
  echo "Invalid username or password.";
}
else{
  $_SESSION['id'] = $row['id'];
}
//header("Location: index.php");