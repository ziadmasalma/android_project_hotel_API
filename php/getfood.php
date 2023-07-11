<?php
include('db.php');
$pdo = db_connect();
if (!$pdo) {
    die("Database connection failed.");
}

$sql = "SELECT * FROM food";
$stmt = $pdo->prepare($sql);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    $rooms = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $room = array(
            "Name" => $row["Name"],
            "Description" => $row["Description"],
            "Price" => $row["Price"],
            "id" => $row["id"]
        );
        $rooms[] = $room;
    }

    $response = json_encode($rooms);
    echo $response;
} else {
    echo "No rooms found";
}
$pdo = null;
