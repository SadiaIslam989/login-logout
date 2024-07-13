<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is user home page</h1><?php echo  $_SESSION["username"]?>
    <a href="logout.php">LogOut</a>
</body>
</html>