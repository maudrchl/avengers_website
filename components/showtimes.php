<?php
    include('config.php');
    include('showtimes_request.php');

    $zip = $_GET['zip'];
    $date = date('Y-m-d', time());

    $query = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$zip.'&region=fr');
    $query = json_decode($query);
    $position = '{lat: '.$query->results[0]->geometry->location->lat.', lng: '.$query->results[0]->geometry->location->lng.'}';

    $showtimes = getShowtimes($date, $zip);

    include('header.php');
?>
    <header>
        <h1>Showtimes</h1>
    </header>
    <main>
    <div class='map' id='map'>
    </div>
        <div class='cinemas'>
            <?php foreach($showtimes as $cinema){?>
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
            <?php }?>
        </div>
    </main>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: <?= $position?>,
                zoom: 11
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFtnhNfjGErlA4OP1OjJWQaoGPKSq9OzI&region=Fr
&callback=initMap"
    async defer></script>
    <script src="../script/Nav.js"></script>
    <script src="../script/main.js"></script>
</body>
</html>