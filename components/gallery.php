<?php
    include "../components/header.php";
    include "../components/nav.php";
?>
<body class="gallery-test">
    <div class = "background"></div> 
    <div class="gallery content">
        <p class="txt-gallery">Fear is not a choice.</p>
        <p class="txt-gallery2">Hulk...smash!</p>
        <div class="canvas">
            <canvas width="1000px" height="1000px"></canvas>
        </div>
        <div class="canvas2">
            <canvas width="2000px" height="2000px"></canvas>
        </div>
        <a href="heros.php?id=0"><img src="../images/gallery/hero_0.png" class="gallery_hero hero_0 js-cursor-parallax" data-amplitude="-0.3"></a>
        <a href="heros.php?id=2"><img src="../images/gallery/hero_2.png" class="gallery_hero hero_2 js-cursor-parallax" data-amplitude="-0.8"></a> 
        <a href="heros.php?id=3"><img src="../images/gallery/hero_4.png" class="gallery_hero hero_4 js-cursor-parallax" data-amplitude="-0.5"></a>
        <a href="heros.php?id=4"><img src="../images/gallery/hero_5.png" class="gallery_hero hero_5 js-cursor-parallax" data-amplitude="-0.7"></a>
        <a href="heros.php?id=5"><img src="../images/gallery/captaina.png" class="gallery_hero hero_6 js-cursor-parallax" data-amplitude="0.4"></a>
        <a href="heros.php?id=5"><img src="../images/gallery/captain.png" class="shield js-cursor-parallax" data-amplitude="-0.2"></a>
        <a href="heros.php?id=6"><img src="../images/gallery/hero_7.png" class="gallery_hero hero_7 js-cursor-parallax" data-amplitude="0.8"></a>
        <a href="heros.php?id=7"><img src="../images/gallery/hero_8.png" class="gallery_hero hero_8 js-cursor-parallax" data-amplitude="-0.4"></a>
        <a href="heros.php?id=8"><img src="../images/gallery/hero_9.png" class="gallery_hero hero_9 js-cursor-parallax" data-amplitude="-0.5"></a>
        <a href="heros.php?id=1"><img src="../images/gallery/hero_1.png" class="gallery_hero hero_1 js-cursor-parallax" data-amplitude="0.8"></a>
        <a href="heros.php?id=9"><img src="../images/gallery/hero_10.png" class="gallery_hero hero_10 js-cursor-parallax" data-amplitude="-0.9"></a>
        <a href="heros.php?id=10"><img src="../images/gallery/hero_3.png" class="gallery_hero hero_3 js-cursor-parallax" data-amplitude="-0.3"></a>
        <div class="share"><div>
    </div>

    </body>
    <script src="../script/jquery.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/CursorParallax.js"></script>
    <script src="../script/Audio.js"></script>
    <script src="../script/Scrolling.js"></script>
    <script src="../script/Nav.js"></script>
    <script src="../script/GalleryFilter.js"></script>
    <script src="../script/main.js"></script>
</html>