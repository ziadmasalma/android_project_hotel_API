<?php

 include ('db.php');

    $pdo = db_connect();

    if (!$pdo) {
         die("Database connection failed.");
    }



  if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
	$name = $_POST['name'];  
    $numfloor = intval($_POST['numfloor']);
    $price = floatval($_POST['price']); 
    $type = intval($_POST['type']);
    $state = "Available"; 

    // insert
    $sql = "insert into room(name,numfloor,price,type,state) values('$name','$numfloor','$price','$type','$state')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
    echo "Room added successfully.";
    }else{
    echo "Room not added.";
    }



   }

?>

