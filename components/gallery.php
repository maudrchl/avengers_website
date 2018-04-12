<?php
    include "../components/nav.php";
?>
<!DOCTYPE html>
<html class="gallery-page" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers Infinity War</title>
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    <link rel="mask-icon" href="../images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff"> 
</head>
<body class="gallery-test">
    <div class="navigation"></div>
    <nav class="bars">
        <div class="bar1"></div>
        <div class="bar2"></div>
    </nav>
    <audio src="../audio/song.mp3" autoplay loop></audio>
    <div class="equalizer">
        <div class="bar bar-1"></div>
        <div class="bar bar-2"></div>
        <div class="bar bar-3"></div>
        <div class="bar bar-4"></div>
        <div class="bar bar-5"></div>
    </div>
    <main class="sliding">
    <img src="../images/land.jpg" class = "background js-parallax" data-amplitude="0.1"> 
    <div class="gallery content">
        <p class="txt-gallery">Fear is not a choice.</p>
        <p class="txt-gallery2">Hulk...smash!</p>
        <img src='../images/explosion.png' class="gallery_hero explosion js-parallax" data-amplitude="0.5">
        <img src='../images/fog.png' class="gallery_hero fog js-parallax" data-amplitude="0.5">
        <a href="heros.php?id=0"><img src="../images/gallery/hero_0.png" class="gallery_hero hero_0 js-cursor-parallax js-parallax" data-amplitude="2"></a>
        <a href="heros.php?id=1"><img src="../images/gallery/hero_1.png" class="gallery_hero hero_1 js-cursor-parallax js-parallax" data-amplitude="1"></a>
        <a href="heros.php?id=2"><img src="../images/gallery/hero_2.png" class="gallery_hero hero_2 js-cursor-parallax js-parallax" data-amplitude="2"></a> 
        <a href="heros.php?id=3"><img src="../images/gallery/hero_4.png" class="gallery_hero hero_3 js-cursor-parallax js-parallax" data-amplitude="1.5"></a>
        <a href="heros.php?id=4"><img src="../images/gallery/hero_5.png" class="gallery_hero hero_4 js-cursor-parallax js-parallax" data-amplitude="0.5"></a>
        <a href="heros.php?id=5"><img src="../images/gallery/hero_6.png" class="gallery_hero hero_5 js-cursor-parallax js-parallax" data-amplitude="1"></a>
        <a href="heros.php?id=6"><img src="../images/gallery/hero_7.png" class="gallery_hero hero_6 js-cursor-parallax js-parallax" data-amplitude="2"></a>
        <a href="heros.php?id=7"><img src="../images/gallery/hero_8.png" class="gallery_hero hero_7 js-cursor-parallax js-parallax" data-amplitude="1"></a>
        <a href="heros.php?id=8"><img src="../images/gallery/hero_9.png" class="gallery_hero hero_8 js-cursor-parallax js-parallax" data-amplitude="2.5"></a>
        <a href="heros.php?id=9"><img src="../images/gallery/hero_10.png" class="gallery_hero hero_9 js-cursor-parallax js-parallax" data-amplitude="1.5"></a>
        <a href="heros.php?id=10"><img src="../images/gallery/hero_3.png" class="gallery_hero hero_10 js-cursor-parallax js-parallax" data-amplitude="1"></a>
        <div class="share"><div>
    </div>
    </main>
</body>
    <!--<script src="../script/CursorParallax.js"></script>-->
    <script src="../script/Audio.js"></script>
    <script src="../script/Scroller.js"></script>
    <script src="../script/Nav.js"></script>
    <script src="../script/GalleryFilter.js"></script>
    <script src="../script/main.js"></script>
</html>