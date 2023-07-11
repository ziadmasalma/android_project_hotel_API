<?php
session_start();

include('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}

// Update the room state to "Available"
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $state = "Available";

    $sql = "UPDATE room SET state = :state WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':state', $state);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Room availability updated successfully.";
    } else {
        echo "Room availability not updated.";
    }
}
?>