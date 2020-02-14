<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "extra_bet";
$conn = mysqli_connect($hostname, $user, $password) or die("Could not connect database");

mysqli_select_db($conn, $database) or die("Database Doesn't Exit");