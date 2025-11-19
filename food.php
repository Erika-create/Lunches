<?php
    session_start();
    $restricted_roles = ["pupil"];

    /*if (!isset($_SESSION["Student"])){
        header("location:login.php");
        exit();
    }*/

    if (in_array($_SESSION["role"], $restricted_roles, true)) {
    header("location:login.php");
    //header("HTTP/1.1 403 Forbidden");
    echo "<h1>Access Denied</h1><p>Your account is not allowed to view this page.</p>";
    exit();
}

    echo("Hello ".$_SESSION["firstname"]);
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
            echo($row["Name"]." ".$row["Description"]);
            echo("<br>");
        }
    ?>
</body>
</html>