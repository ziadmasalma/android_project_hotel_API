<?php
include('db.php');
$pdo = db_connect();
if (!$pdo) {
    die("Database connection failed.");
}

$sql = "SELECT * FROM room";
$stmt = $pdo->prepare($sql);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    $rooms = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $room = array(
            "name" => $row["name"],
            "numfloor" => $row["numfloor"],
            "price" => $row["price"],
            "type" => $row["type"],
            "id" => $row["id"] ,
            "state" => $row["state"]
        );
        $rooms[] = $room;
    }

    $response = json_encode($rooms);
    echo $response;
} else {
    echo "No rooms found";
}
$pdo = null;
