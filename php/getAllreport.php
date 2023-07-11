<?php

include('db.php');

$pdo = db_connect();

if (!$pdo) {
    die("Database connection failed.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['date'])) {
    $date = $_POST['date'];

    $sql = "SELECT * FROM report WHERE date = :date";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':date', $date);

    if ($stmt->execute()) {
        $reports = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $reports[] = $row;
        }

        echo json_encode($reports);
    } else {
        echo "Error executing the query.";
    }
}
?>
