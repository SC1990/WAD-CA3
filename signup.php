<?php
include 'header.php';

$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$pass = $_POST['pass'];


$signquery = "INSERT INTO accdet (first, last, uname, pword)
VALUES ('$first', '$last', '$user', '$pass')";


$result = $conn->query($signquery);

header("Location: index.php");