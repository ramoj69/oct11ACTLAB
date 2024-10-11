<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "healthapp";
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, $user, $password);
$pdo ->exec(statement:"SET time_zone = '+08:00';");

?>