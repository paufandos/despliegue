<?php
$pdo = new PDO('mysql:host=10.10.11.20:4000;dbname=refugees', 'root', 'root');
$date = "SELECT * FROM refugees WHERE id = 1";

header("Content-Type: application/json");
echo json_encode($data);