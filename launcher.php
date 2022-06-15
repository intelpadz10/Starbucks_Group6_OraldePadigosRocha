<?php

require_once "init.php";
use Sessions\Session;
//Session::start();

//Session::remove('orderList');
//Session::remove('customerName');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="launcher.css">

    <link rel="icon" href="assets/logo.png" />

    <title>Starbucks Philippines</title>
</head>

<body>
    <div class="background1">
        <div class="background2">
            <img src="assets/logo.png" alt="Starbutts Logo" style="width: 60px; height: 60px;">
            <h3>Welcome to <br> Starbucks Philippines <br></h3>
        
            <form action =
            <?php 
                echo $_SERVER['PHP_SELF']; 
            ?> 
            method = "post" id="inputName">
            <input type="text" name="customerName" id="name"><br><br>
            <label style="font-size:9px">Enter your name</label><br><br>
            <button type="submit" form="inputName" name="submit" style="font-size:8px">Proceed</button>
            <?php
            if($_REQUEST){
                if(isset($_REQUEST['submit'])){
                    if(isset($_REQUEST['customerName']) && !empty($_REQUEST['customerName'])){
                        $_SESSION['customerName'] = $_REQUEST['customerName'];
                        header('Location: selection.php');
                    }
                    else{
                        echo "<br><br><p style='font-size:12px; color: #939393; font-weight: 450;'>Please input your name to proceed<p>";
                    }
                }
            }
            ?>
            </form>
        </div>
    </div>
</body>

</html>