<?php
    session_start();
    if ($_SESSION["admin"]==1){
        echo("Hello ".$_SESSION["firstname"]);
    }else{
        header("location: index.php");
    }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Info</title>
</head>

<body>
    <form action="addfood.php" method="post">
        Name:<input type="text" name="name"><br>
        Description:<input type="text" name="description"><br>
        Category:
        <select name="category">
            <option value="snack">Snack</option>
            <option value="drink">Drink</option>
            <option value="sandwich">Sandwich</option>
        </select>
        <br>
        Price:<input type="text" name="balance"><br>
        <input type="submit" value="Add Food">
    </form>   
    <?php
        include_once("connection.php");
        $stmt=$conn->prepare("SELECT * FROM tblfood");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            //print_r($row);
            echo($row["Name"]." ".$row["Description"]." ".$row["Price"]);
            echo("<br>");
        }
    ?>
</body>
</html>