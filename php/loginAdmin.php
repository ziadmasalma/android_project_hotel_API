<?php
session_start();
include ('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){

     $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "SELECT * FROM admin WHERE email = :email AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $stmt->rowCount() > 0) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['id'] = $user['id'];
        echo "Login successful.";
        exit;
    } else {
        echo "Invalid username or password.";
    }

}


?>