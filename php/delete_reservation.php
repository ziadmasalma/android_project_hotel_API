<?php

include('db.php');

$pdo = db_connect();

if (!$pdo) {
    error_message(sql_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM foodres WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id);

    if ($stmt->execute()) {
        echo "Reservation deleted successfully.";
    } else {
        echo "Failed to delete reservation.";
    }
}

?>






