<?php
require 'constants\db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];


    $sql = "INSERT INTO users (name, email_address, age) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([$name, $email, $age]);
        header("Location: index.php");
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
