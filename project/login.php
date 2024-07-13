<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username='".$username."' AND   password='".$password."'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {   
        $_SESSION["username"]=$username;

        header("location:userhome.php");
    }

    elseif($row["usertype"]=="admin")
    {   
        $_SESSION["username"]=$username;
        
        header("location:adminhome.php");
    }
    else
    {
        echo "username or password incorrect";
    }
   
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

<center>
    <h1>Login Form</h1>
    <br><br><br><br>
    <div style= "background-color: #ADD8E6; width: 500px;" >
        <br><br>

        <form action="#" 
        method="POST">

    <div>
        <label>Username</label>
        <input type="text" name="username" required>
    </div>
    <br><br>

    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <br><br>
    
    <div>
       
        <input type="submit" value="Login">
   </form>
    </div>

    <br><br>
    </div>
    </center>



</body>
</html>