<?php

include('db.php');

$pdo = db_connect();

if (!$pdo) {
    error_message(sql_error());
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    $sql = "SELECT SUM(price) FROM payfood";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $total = $stmt->fetchColumn();

   
    $sql1 = "SELECT SUM(price) FROM payres";
    $stmt1 = $pdo->prepare($sql1);
    $stmt1->execute();
    $total1 = $stmt1->fetchColumn();


    $date = date("d-m-Y"); 

    $sql2 = "INSERT INTO report (totalfood,totalres,date) VALUES (:total , :total1 , :date)";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->bindValue(':total', $total);
    $stmt2->bindValue(':total1', $total1);
    $stmt2->bindValue(':date', $date);

    if($stmt2->execute()){
        echo "Report added.";

       
        $sql3 = "DELETE FROM payfood";
        $stmt3 = $pdo->prepare($sql3);
        $stmt3->execute();

        $sql4 = "DELETE FROM payres";
        $stmt4 = $pdo->prepare($sql4);
        $stmt4->execute();



    }else{
        echo "Report not added.";
    }

}
?>