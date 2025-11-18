<?php

print_r($_POST);
array_map("htmlspecialchars", $_POST); //sanitises inputs so no html can be injected
include_once("connection.php");

try{
    $stmt=$conn->prepare("SELECT * from tblusers WHERE Username=:Username;");
    $stmt->bindParam(":Username", $_POST["username"]);
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            //print_r($row);
            echo($row["Name"]." ".$row["Description"]);
            echo("<br>");
        }
    if ($stmt->rowCount() == 0) {
        echo("Invalid username .");
    }else{
        ("ok");
    } 
}
catch(PDOException $e)
{
    echo("error: " . $e->getMessage());
}

?>


