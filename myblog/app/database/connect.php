<?php

$host = "localhost";
$user = "root";
$pass = "10977";
$db_name = "myblog";

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error){
    die('Database connection error: ' . $conn->connect_error);
}