<?php

// called dbc because i'm making it stands for :  DATABASE CONNECTION
//database

//this user is allowed to access database
return $conn = mysqli_connect('mysql2.mylogin.ie', 'mbizad42', 'conmbiz72', 'RG344090_mbdb');

if(!$conn){
  die("Connection failed : " . mysql_connect_error());
}