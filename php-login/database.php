<?php

$server = 'blgbqpb0uuad7bhcwwa6-mysql.services.clever-cloud.com';
$username = 'ugvagt7dpffvdum4';
$password = 'YdZBKdUILfRHhtboX0LF';
$database = 'blgbqpb0uuad7bhcwwa6';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>