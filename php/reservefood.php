<?php
session_start();
include('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $states = "Not Paid";
    $price = $_POST['price'];
    $des = $_POST['Description'];

    $sql = "insert into foodres(username,name,state,price,Description) values('$username','$name','$states','$price','$des')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Food reserved successfully.";
    } else {
        echo "Food not reserved.";
    }
}
