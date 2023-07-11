<?php
include('db.php');

$conn = db_connect();

if (!$conn) {
    die("Database connection failed.");
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
$roomId = $_GET['room_id'];
$query = "SELECT * FROM room WHERE id = '$roomId'";
$stmt = $conn->prepare($query);
$stmt->execute();

$room = $stmt->fetch(PDO::FETCH_ASSOC);

if ($room && $stmt->rowCount() > 0) {
    echo json_encode($room);
    exit;
} else {
    echo "Invalid room.";

}

}

?>
