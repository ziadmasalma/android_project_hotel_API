<?php
session_start();

include ('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}
// update the reservation status to paid

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $states = "Not Available";

    $sql = "UPDATE room SET state = :state WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':state', $states);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    if($stmt->rowCount() > 0){
    echo "Reservation status updated successfully.";
    }else{
    echo "Reservation status not updated.";
    }
    

 }


?>