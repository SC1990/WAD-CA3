<?php

include 'header.php';
$loggedOut = true;
session_destroy();

header("Location: index.php");