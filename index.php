<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "marks";

$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn){
    echo "Database not connected";
} 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mark = $_POST["mark"];
    echo $mark;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter marks</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table>
            <tr><th>ID</th><th>MANE</th><th>CLASS</th><th>MARKS</th></tr>
            <tr><td>001</td><td>Mithu</td><td>8A</td><td><Form action="" method="POST" id="form"><input type="text" name="mark" id="mark"></Form></td></tr>
            <tr><td>002</td><td>Jamal</td><td>8A</td><td><Form action="" method="POST"><input type="text" name="mark" id="mark"></Form></td></tr>
            <tr><td>003</td><td>Kamal</td><td>8A</td><td><Form action="" method="POST"><input type="text" name="mark" id="mark"></Form></td></tr>
            <tr><td>004</td><td>Sabbir</td><td>8A</td><td><Form action="" method="POST"><input type="text" name="mark" id="mark"></Form></td></tr>
            <tr><td>005</td><td>Tonmoy</td><td>8A</td><td><Form action="" method="POST"><input type="text" name="mark" id="mark"></Form></td></tr>
            <tr><td>006</td><td>Tuser</td><td>8A</td><td><Form action="" method="POST"><input type="text" name="mark" id="mark"></Form></td></tr>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>