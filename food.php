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
        <input type="radio" name="category" value="drink" checked>Drink<br>
        <input type="radio" name="category" value="food">Food<br>
        <input type="submit" value="Add Food">
        Price:<input type="text" name="balance"><br>
    </form>   
    <?php
        include_once("connection.php");
        $stmt=$conn->prepare("SELECT * FROM tblfood");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            //print_r($row);
            echo($row["Name"]." ".$row["Description"]);
            echo("<br>");
        }
    ?>
</body>
</html>