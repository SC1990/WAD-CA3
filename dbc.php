<?php

// called dbc because i'm making it stands for :  DATABASE CONNECTION

return $conn = mysqli_connect('localhost', 'root', '', 'businessdb');

if(!$conn){
  die("Connection failed : " . mysql_connect_error());
}