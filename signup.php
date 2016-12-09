<?php
//session_start();
include 'dbc.php';

$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$pass = $_POST['pass'];


$sql = "INSERT INTO accdet (first, last, uname, pname)
VALUES ('$first', '$last', '$user', '$pass')";


$result = mysqli_query($conn, $sql);
echo $result;
header("Location: index.php");