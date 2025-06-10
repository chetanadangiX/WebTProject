<?php
$pdo = new PDO("mysql:host=localhost;dbname=lostfound_db", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
session_start();
?>
