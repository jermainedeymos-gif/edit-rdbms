<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php"); // already logged in, send to dashboard
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /*===Client Login Form===*/
    #body {
        background-image: url('https://wallpapers.com/images/hd/silver-aesthetic-car-wash-av2eptgo6na7ybh8.jpg');
        background-repeat: no-repeat;
        background-position: cover;
    }

    #index {
        border: 3px solid #f1f1f1;
        width: 19%;
        margin: auto;
        margin-top: 13%;
        padding: 10px;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
        border-radius: 7%;
    }

    #input-form {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 18px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;

    }

    #label-form {
        font-weight: bold;
        margin-left: 5%;
    }

    #a {
        text-align: center;
    }

    #b {
        margin-left: 22%;
    }
</style>

<body id="body">
    <form id="index" action="../page/login_handler.php" method="post">

        <h1>Client User Account</h1>
        <p>Please login to view the dashboard</p>
        <hr><br><br><br>

        <label id="label-form" for="">User Name:</label>
        <br>
        <input id="input-form" type="text" name="username" placeholder="Username..." required>
        <br>

        <label id="label-form" for="">User Password:</label>
        <br>
        <input id="input-form" type="password" name="password" placeholder="Userpass..." required>
        <br><br>
        <hr><br><br>

        <input type="submit" name="login" value="Login">
        <br><br>

        <p id="a">------------------Or------------------</p>
        <label id="b" for="">Don't have an account? <a id="c" href="./client-register.php">Register</a></label>
    </form>
</body>

</html>