<?php
session_start();
include ('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}


if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    $email = $_GET['email'];

    $sql = "SELECT * FROM users WHERE email = :email";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $stmt->rowCount() > 0) {
        echo $user['username'];
        exit;
    } else {
        echo "Invalid username or password.";
    }
}



?>
