<body class="gallery-test">
    <div class="loader-container">
        <div id="loader"></div>
    </div>
    <script src="script/lottie.js"></script>
    <script src="script/loader.js"></script>
    <div class="navigation"></div>
    <nav class="bars">
        <div class="bar1"></div>
        <div class="bar2"></div>
    </nav>
    <main class="sliding">
    <img src="images/land.jpg" class = "background js-parallax" data-amplitude="0.1"> 
    <div class="gallery content">
        <p class="txt-gallery">Fear is not a choice.</p>
        <p class="txt-gallery2">Hulk...smash!</p>
        <img src='images/explosion.png' class="gallery_hero explosion js-parallax" data-amplitude="0.5">
        <img src="images/clouds.png" class="clouds js-parallax js-lazy-load" data-amplitude="1">
        <img src="images/gallery/rock.png" class="rock js-parallax js-lazy-load" data-amplitude="3">
        <a href="./heros?id=0"><img src="images/gallery/hero_0.png" class="gallery_hero hero_0 js-parallax js-lazy-load" data-amplitude="2"></a>
        <a href="./heros?id=1"><img src="images/gallery/hero_1.png" class="gallery_hero hero_1 js-parallax js-lazy-load" data-amplitude="1"></a>
        <a href="./heros?id=2"><img src="images/gallery/hero_2.png" class="gallery_hero hero_2 js-parallax js-lazy-load" data-amplitude="2"></a> 
        <a href="./heros?id=3"><img src="images/gallery/hero_4.png" class="gallery_hero hero_3 js-parallax js-lazy-load" data-amplitude="1.5"></a>
        <a href="./heros?id=4"><img src="images/gallery/hero_5.png" class="gallery_hero hero_4 js-parallax js-lazy-load" data-amplitude="0.5"></a>
        <a href="./heros?id=5"><img src="images/gallery/hero_6.png" class="gallery_hero hero_5 js-parallax js-lazy-load" data-amplitude="1"></a>
        <a href="./heros?id=6"><img src="images/gallery/hero_7.png" class="gallery_hero hero_6 js-parallax js-lazy-load" data-amplitude="2"></a>
        <a href="./heros?id=7"><img src="images/gallery/hero_8.png" class="gallery_hero hero_7 js-parallax js-lazy-load" data-amplitude="1"></a>
        <a href="./heros?id=8"><img src="images/gallery/hero_9.png" class="gallery_hero hero_8 js-parallax js-lazy-load" data-amplitude="2.5"></a>
        <a href="./heros?id=9"><img src="images/gallery/hero_10.png" class="gallery_hero hero_9 js-parallax js-lazy-load" data-amplitude="1.5"></a>
        <a href="./heros?id=10"><img src="images/gallery/hero_3.png" class="gallery_hero hero_10 js-parallax js-lazy-load" data-amplitude="1"></a>
        <div class="share">
            <h3 class="showtimes_gallery">Showtimes</h3>
            <p class="txt-showtimes">Discover the showtimes of Avengers near you.</p>
            <form action="showtimes" method="GET" class="form_gallery">
                <input type ="text" name="zip" class="zipcode" placeholder="City or Zipcode"></input>
                <input type="submit" name="submit" class="submit" value="OK">
            </form>
        <div>
    </div>
    </main>
    <script src="script/Scroller.js"></script>
</body>
