<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP DEMO WEBSITE</title>
</head>
<body>

<?php include ("db/connection.php"); ?>

<header>
    <a href="index.php"><h1 class="logo">DEMO</h1></a>

    <div class="menu">
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="recensies.php">RECENSIES</a></li>
                <li><a href="https://github.com/ptrckk/PHP-DEMO/" target="blank_">GITHUB</a></li>
            </ul>
        </nav>
        <div class="hamburgermenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
    </div>

</header>