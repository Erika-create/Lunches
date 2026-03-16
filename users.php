<!DOCTYPE HTML>
<html>
<head>          
    <title>PHP Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .bg-1 {
        background-color:rgba(255, 255, 44, 0.35);
    }
    </style>
</head>

<body>
    <div class="container-fluid bg-1">
    <form action="addpupil.php" method="POST">
        Surname:<input type="text" name="surname"><br>
        Forename:<input type="text" name="forename"><br>
        Password:<input type="password" name="password"><br>
        Year:<input type="number" name="year"><br>
        Initial Balance :<input type="text" name="balance"><br>
        Role:<br>
        <input type="radio" name="role" value="pupil" checked> Pupil<br>
        <input type="radio" name="role" value="admin" > Adminstrator<br>
        <input type="submit" value="Add User">
    </form>
    <?php
        include_once("connection.php");
        $stmt=$conn->prepare("SELECT * FROM tblusers");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            //print_r($row);
            echo($row["Forename"]." ".$row["Surname"]);
            echo("<br>");
        }
    ?>
</div>
</body>
</html>