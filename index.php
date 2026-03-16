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
    <title>Packed lunch ordering system</title>
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
    <div class="container-fluid bg-1 text-center">
    <h1>Main page</h1>
    <a href="users.php">Add user</a><br>
    <a href="food.php">Add food</a><br>
    <a href="choosefood.php">choose food</a><br>
    <a href="login.php">Login</a><br>
    <a href="logout.php">Logout</a><br>
    <a href="emptybasket.php">Empty Basket</a><br>
    <a href="viewbasket.php">View Basket</a><br>
    <a href="orderhistory.php">View Order History</a><br>
    <div class="container">
    <h2>Basic Table</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>



