<?php
header("location:food.php");
print_r($_POST);
include_once("connection.php"); //equivalent of import

//if($_POST["role"]=="admin"){
//    $role=1;
#else if not elif
//}else{
//    $role=0;
//}

//$username=$_POST["surname"].".".$_POST["forename"];
#echo($username);

try{
    $stmt=$conn->prepare("INSERT INTO tblfood 
    (FoodID,Name,Description,Category,Price)
    VALUES
    (NULL,:Name,:Description,:Category,:Price)
    ");
    $stmt->bindParam(":Name", $_POST["name"]);
    $stmt->bindParam(":Description", $_POST["description"]);
    //$stmt->bindParam(":Category", $_POST["category"]);
    $stmt->bindParam(":Price", $_POST["price"]);
    $stmt->bindParam(":Category", $category);
    //$stmt->bindParam(":Name", $name);
    $stmt->execute();
}
catch(PDOException $e)
{
    echo("error: " . $e->getMessage());
}
?>