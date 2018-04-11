<?php 
    include "components/config.php";
    include "components/nav_index.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers Infinity War</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff"> 
</head>

<body class="homepage">
    <nav class="bars">
        <div class="bar1"></div>
        <div class="bar2"></div>
    </nav>
    <div class="background_video">
        <video loop muted autoplay class="fullscreen-bg__video">
            <source src="images/avengers.mp4" type="video/mp4">
        </video>
    </div>
    <div class="background_black"></div>
    <div class="txt_background">
        <h2>Infinity War</h2>
        <h1>Avengers</h1>
        <div class="red_block"></div>
        <h3 class="release">Release on</h3>
        <h3 class="release date">25 april</h3>
    </div>
    <div class="circle"></div>
    <img src=images/arrow.svg class="arrow" width=200px>
    <span class="discover">discover</span>
    
    </body>

    <script src="script/Nav.js"></script>
    <script src="script/main.js"></script>
</html>