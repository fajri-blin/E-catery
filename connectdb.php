<?php
$server = 'localhost';
$usernamedb = 'root';
$passworddb = '';
$databasedb = 'e_catering';

$connnectdb = mysqli_connect($server, $usernamedb, $passworddb, $databasedb) or die ("Connection Failed");

mysqli_select_db($connnectdb, $databasedb);