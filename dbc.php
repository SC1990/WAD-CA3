<?php

// called dbc because we're making it stand for :  DATABASE CONNECTION

//this user is allowed to access database
$conn = mysqli_connect("mysql2.mylogin.ie", "mbizad42", "conmbiz72", "RG344090_mbdb");

if(!$conn){
  die("Connection failed : ".mysql_connect_error());
}
else{
	echo "YOURE IN";
}