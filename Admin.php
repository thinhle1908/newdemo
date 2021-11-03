<?php
include "User.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['login'])){
            echo "Xin chào ".$_SESSION['login']->username;
        }
        else{
            header('location:login.php');
        }
    ?>
    <h1><a href="logout.php">Logout</a></h1>
</body>
</html>