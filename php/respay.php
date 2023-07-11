<?php
session_start();

include ('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $price = $_POST['price'];

    $sql = "insert into payres(price) values('$price')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
    echo "Price inserted successfully.";
    }else{
    echo "Price not inserted.";
    }
    

 }


?>