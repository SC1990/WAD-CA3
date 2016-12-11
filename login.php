<?php
session_start();
include 'dbc.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$logquery = "SELECT * FROM accdet WHERE uname='$user' AND pword='$pass'";
$result = $conn ->query($logquery);

if(!$row = $result->fetch_assoc()){
  $_SESSION['fakedet'] = true;
  $_SESSION['uexistz'] = false;
  header("Location: index.php");
}
else{
	
  $_SESSION['id'] = $row['id'];
  $_SESSION['first'] = $row['first'];
  $_SESSION['uname'] = $row['uname'];
  $_SESSION['logged']=true;

}
header("Location: index.php");