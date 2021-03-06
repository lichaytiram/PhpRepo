<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "myfirstdb";

$conncation = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if (!$conncation)
    die(mysqli_connect_error());
