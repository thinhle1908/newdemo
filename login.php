<?php 
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
    <?php include "User.php" ?>
    <form method="post">
        <label for="username">User name: </label>
        <input type="text" name="username"><br><br>
        <label for="password">Password: </label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="Submit" value="Đăng nhập">
    </form>
    <?php
    
    if (isset($_POST['Submit'])) {
        $u1= new User($_POST['username'],$_POST['password'],"","");
        if ($u1->login($_POST['username'], $_POST['password']) == true) {
            $_SESSION['login'] = $u1;
            header('location:Admin.php');
        } 
    }
    ?>
</body>

</html>