<?php
session_start();
include 'dbc.php';
if(isset($_POST['delcomat'])){
	$cid = $_POST['cid'];
	$cuname = $_POST['cuname'];
	$cmessage = $_POST['cmessage'];

	$sql= "DELETE * FROM comtbl WHERE (cid='$cid')";
	$result = $conn->query($sql);


	
}

header("Location: index.php");
?>