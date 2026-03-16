<?php
    session_start();
    #print_r($_SESSION);
    if (isset($_SESSION["loggedinuser"])){
        echo("Hello ".$_SESSION["firstname"]);
    }else{
        echo("not logged in");
    }
?>
<!DOCTYPE HTML>
<html>
<head>          
    <title>Packed lunch orderhistory</title>
</head>

<body>
    <h1>Order History</h1>
    <?php
    session_start();
    include_once("connection.php");
    $stmt=$conn->prepare("SELECT tblorder.UserID as UsrID, tblfood.Name as FN, 
    tblfood.Price as FP, tblorder.OrderID as OrID, tblbasket.Quantity as BQ 
    FROM tblorder 
    JOIN tblbasket ON tblorder.OrderID=tblbasket.OrderID
    JOIN tblfood ON tblbasket.FoodID=tblfood.FoodID
    WHERE tblorder.UserID=:userid 
    ORDER BY Orderdate DESC");
    $stmt->bindParam(":userid",$_SESSION["loggedinuser"]);
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo($row["FN"]." - ".$row["FP"]*$row["BQ"]);
            echo("<br>");
            $temp=$row["OrID"];
        }
?>
</body>
</html>