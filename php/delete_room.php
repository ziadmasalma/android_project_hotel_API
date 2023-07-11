<?php
include('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $roomId = $_GET['room_id'];

    $query = "DELETE FROM room WHERE id = :room_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':room_id', $roomId);

    if ($stmt->execute()) {
        $response = array("success" => true);
    } else {
        $response = array("success" => false);
    }

    echo json_encode($response);
}
?>