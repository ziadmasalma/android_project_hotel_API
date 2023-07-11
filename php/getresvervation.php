<?php
include('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}


$sql = "SELECT * FROM roomres";

$stmt = $pdo->query($sql);

if ($stmt->rowCount() > 0) {
    $reservations = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $reservation = array(
            "id" => $row["id"],
            "username" => $row["username"],
            "name" => $row["name"],
            "state" => $row["state"],
            "price" => $row["price"],
            "roomid" => $row["roomid"]
        );

        $reservations[] = $reservation;
    }
    $json_reservations = json_encode($reservations);


    echo $json_reservations;
} else {
    echo "No reservations found";
}
?>
