<?php
require "connectdb.php";
$sql = "SELECT * FROM food";
$result = mysqli_query($connnectdb,$sql);
$row = mysqli_fetch_array($result);
?>