<?php
    include('config.php');
    include('showtimes_request.php');
    include('nav.php');


    $zip = $_GET['zip'];
    $date = date('Y-m-d', time());

    $query = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$zip.'&region=fr');
    $query = json_decode($query);
    $position = '{lat: '.$query->results[0]->geometry->location->lat.', lng: '.$query->results[0]->geometry->location->lng.'}';

    $showtimes = getShowtimes($date, $zip);

    $array_theatres = array();
    for ($i = 0; $i < sizeof($showtimes); $i++){
        $adress = $showtimes[$i]['address'];
        $query2 = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$adress.'&region=fr');
        $query2 = json_decode($query2);

        $position_theatres = '{lat: '.$query2->results[0]->geometry->location->lat.', lng: '.$query2->results[0]->geometry->location->lng.'}';
        array_push($array_theatres, $position_theatres);
    }
    include('header.php');
?>
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
    <script src="../script/Nav.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/main.js"></script>
</body>
</html>