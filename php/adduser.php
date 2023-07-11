<?php
include('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);

    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            echo "Email already exists! Please choose a different email.";
        } else {
            $sql = "INSERT INTO users (username, email, phone, password) VALUES (:username, :email, :phone, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':phone', $phone);
            $stmt->bindValue(':password', $password);

            if ($stmt->execute()) {
                echo "User added successfully.";
            } else {
                echo "Failed to add user";
            }
        }
    } else {
        echo "Error executing the query.";
    }
}
?>
