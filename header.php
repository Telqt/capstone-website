<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/shop.css">
    
    <title>DAYO | Tactical gear</title>
</head>
<body>
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
    <header>
        <div class="logo">
            <img src="./img/icon.png" alt="dayo logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </nav>

        <div class="login_panel">

            <?php
                if(isset($_SESSION["UID"])) {

                    if($_SESSION["UID"] === 1 AND $_SESSION["email"] === "admin.dayo@gmail.com") {
                        echo '<a class="login_btn" href="dashboard.php">Dashboard</a>';
                        echo '<a class="logout_btn" href="logout.php">Logout</a>';
                    } else {
                        echo '<a class="login_btn" href="profile.php">' . $_SESSION["firstname"] . '</a>';
                        echo '<a class="logout_btn" href="logout.php">Logout</a>';
                    }              
                } else {
                    echo '<a class="login_btn" href="login.php">Login</a>';
                    echo '<a class="signup_btn" href="signup.php">Signup</a>';
                }

            ?>
            
        </div>
    </header>