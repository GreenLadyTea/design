<?php
session_start();
$config = require_once './config/config.php';
try {
    $db = new PDO('mysql:host=' . $config["host"] . ';dbname=' . $config["db"], $config["user"], $config["password"]);
}
catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}