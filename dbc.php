<?php

// called dbc because i'm making it stands for :  DATABASE CONNECTION
//database

//this user is allowed to access database
return $conn = mysqli_connect('localhost', 'bizuser', 'biz123', 'bizdb');

if(!$conn){
  die("Connection failed : " . mysql_connect_error());
}