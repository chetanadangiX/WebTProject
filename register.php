<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $username = $_POST["username"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $stmt = $pdo->prepare("INSERT INTO users (name, email, phone, username, password) VALUES (?, ?, ?, ?, ?)");
  $stmt->execute([$name, $email, $phone, $username, $password]);

  echo "✅ Registered Successfully!";
}
?>
