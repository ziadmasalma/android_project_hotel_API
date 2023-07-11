<?php
session_start();
include ('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}


if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // get the username bassd on the email
    $email = $_GET['email'];

    $sql = "SELECT * FROM admin WHERE email = :email";

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
