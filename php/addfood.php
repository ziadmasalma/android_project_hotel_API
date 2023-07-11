<?php
include('db.php');
$pdo=db_connect();
if(!$pdo){
    error_message(sql_error());
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['Name'];
    $description=$_POST['Description'];
    $price=floatval($_POST['Price']);
    $sql="INSERT into food (Name , Description , Price) VALUES ('$name' ,'$description' , '$price')";
    $stmt=$pdo->prepare($sql);
    if($stmt->execute()&& $stmt->rowCount()>0){
        echo"food add";
    }
    else {
        echo"not add";
    }
}
?>