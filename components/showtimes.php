<?php
    include('config.php');
    include('showtimes_request.php');
    include('nav.php');


    $zip = $_GET['zip'];
    $date = date('Y-m-d', time());

    $query = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$zip.'&region=fr&key='.GOOGLE_KEY);
    $query = json_decode($query);

    $position = '{lat: '.$query->results[0]->geometry->location->lat.', lng: '.$query->results[0]->geometry->location->lng.'}';

    $showtimes = getShowtimes($date, $zip);

    $array_theatres = array();
    for ($i = 0; $i < sizeof($showtimes); $i++){
        $adress = urlencode($showtimes[$i]['address']);
        $query2 = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$adress.'&region=fr&key='.GOOGLE_KEY);
        $query2 = json_decode($query2);

        $position_theatres = '{lat: '.$query2->results[0]->geometry->location->lat.', lng: '.$query2->results[0]->geometry->location->lng.'}';
        array_push($array_theatres, $position_theatres);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showtimes</title>
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
<body>
    <div class="loader-container">
        <div id="loader"></div>
    </div>
    <script src="../script/lottie.js"></script>
    <script src="../script/loader.js"></script>
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
    <header>
        <h1>Showtimes</h1>
    </header>
    <main>
    <div class='map' id='map'>
    </div>
        <div class='cinemas'>
            <form action="#" method="GET">
                <input type ="text" name="zip" class="zipcode" placeholder="ZIP code of the city"></input>
                <input type="submit" name="submit" class="submit" value="OK">
            </form>
            <?php if($showtimes == []){ ?>
                <p class="error">No showtime found...</p>
            <?php } else{ foreach($showtimes as $cinema){ ?>
            <div class="cinema">
                <h2 class="name"><?= $cinema['name']?></h2>
                <span class="address"><?= $cinema['address'].', '.$cinema['city']?></span>
                <div class="showtimes">
                    <?php foreach($cinema['showtimes'] as $showtime){?>
                    <div class="showtime">
                        <span class="day"><?= $showtime['time'][0]?></span>
                        <span class="hour"><?= $showtime['time'][1]?></span>
                        <?php if($showtime['ticket']){ ?>
                        <a href="<?= $showtime['ticket']?>" target='_blank' title='buy ticket'><button class="ticket"> Ticket!</button></a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php }}?>
        </div>
    </main>
    <div class="theatres-data"><?= json_encode($array_theatres) ?></div>
    <script>
    function initMap() {
       const map = new google.maps.Map(document.getElementById('map'), {
            center: <?= $position_theatres?>,
            zoom: 11
        });

        let dataTheatres = document.querySelector('.theatres-data').innerHTML
        dataTheatres = `{"positions":${dataTheatres}}`
        i = 0;
        for (const dataTheatre of dataTheatres) {
            const lat = parseFloat(JSON.parse(dataTheatres).positions[i].substring(6, 14))
            const lng = parseFloat(JSON.parse(dataTheatres).positions[i].substring(22, 31))
            const coords = `lat: ${lat}, lng: ${lng}`
            const marker = new google.maps.Marker({
                position: {lat: lat, lng: lng},
                map: map
            });
            i++;
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFtnhNfjGErlA4OP1OjJWQaoGPKSq9OzI&region=Fr
&callback=initMap"
    async defer></script>
    <script src="../script/Mobile.js"></script>
    <script src="../script/Nav.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/main.js"></script>
</body>
</html>