<?php
    include "views/partials/header.php";
    include "views/partials/nav.php";
    include "config.php";

    switch($_GET['q']) {
        case '':
            include "views/pages/home.php";
            break;
        case 'home':
            include "views/pages/home.php";
            break;
        case 'gallery':
            include "views/pages/gallery.php";
            break;
        case 'heros':
            include "views/pages/heros.php";
            break;
        case 'anecdotes':
            include "views/pages/anecdotes.php";
            break;
        case 'showtimes':
            include "views/pages/showtimes.php";
            break;
        default:
            include "views/pages/404.php";
            break;
    }
    
    include "views/partials/footer.php";
?>