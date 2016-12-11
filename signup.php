<?php
session_start();
include 'dbc.php';

$first = $_POST['first'];
$_SESSION['triedname'] = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$usereee = "SELECT uname FROM accdet WHERE uname='$user'";
$resulteee = $conn->query($usereee);
$ucheck = mysqli_num_rows($resulteee);

if($ucheck > 0){
	$_SESSION['uexistz'] = true;
	$_SESSION['fakedet'] = false;
	header("Location: index.php");
	//exit();
	
}
else{

	$signquery = "INSERT INTO accdet (first, last, uname, pword)
	VALUES ('$first', '$last', '$user', '$pass')";

	$result = $conn->query($signquery);
	header("Location: index.php");
	$_SESSION['logged']=true;
}