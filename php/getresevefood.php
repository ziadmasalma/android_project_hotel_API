<?php
include('db.php');
$pdo=db_connect();
if(!$pdo){
    error_message(sql_error());
}
$sql = "SELECT * FROM foodres";
$stmt = $pdo->prepare($sql);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    $foods = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $food = array(
            "name" => $row["name"],
            "Description"=>$row["Description"],
            "price" => $row["price"],
            "id" => $row["id"],
            "state" => $row["state"],
            "username"=> $row["username"]
            
        );
        $foods[] = $food;
    }

    $response = json_encode($foods);
    echo $response;
} else {
    echo "No foods found";
}
$pdo = null;

?>