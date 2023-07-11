<?php
session_start();
include ('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $roomid = $_POST['roomid'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $states = "Not Paid";
    $price = $_POST['price'];
    

    $sql = "insert into roomres(roomid,username,name,state,price) values('$roomid','$username','$name','$states','$price')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
    echo "Room reserved successfully.";
    }else{
    echo "Room not reserved.";
    }

}



?>