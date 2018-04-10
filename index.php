<?php 
    include "components/config.php";
    include "components/nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers Infinity War</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
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