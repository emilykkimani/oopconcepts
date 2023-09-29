<?php
try {
    // Database connection
    $pdo = new PDO("mysql:host=localhost;dbname=hiking_nomads", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to retrieve data
    $sql = "SELECT * FROM users"; // Replace "users" with your table name
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch data
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the retrieved data
    foreach ($result as $row) {
        echo "User ID: " . $row['userId'] . "<br>";
        echo "Name: " . $row['Name'] . "<br>";
        echo "Email_Address: " . $row['Email_Address'] . "<br>";
        echo "Age: " . $row['Age'] . "<br>";
        echo "<hr>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
