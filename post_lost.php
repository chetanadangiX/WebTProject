<?php
require 'db.php';
if (!isset($_SESSION['user_id'])) exit("Login required");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $desc = $_POST["description"];
    $date = $_POST["lost_date"];
    $uid = $_SESSION["user_id"];

    $stmt = $pdo->prepare("INSERT INTO LostItem (description, lost_date, User_id) VALUES (?, ?, ?)");
    $stmt->execute([$desc, $date, $uid]);

    echo "Lost item posted!";
}
?>
