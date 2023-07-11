<?php
include('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);

    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            echo "Email already exists! Please choose a different email.";
        } else {
            $sql = "insert into admin(username,email,password) values('$username','$email','$password')";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() > 0){
            echo "Admin added.";
            }else{
            echo "User not added.";
            }
        }
    } else {
        echo "Error executing the query.";
    }
}
?>
