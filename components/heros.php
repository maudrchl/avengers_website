<?php
    include('config.php');
    include('requests.php');
    include('nav.php');

    $id = $_GET['id'];


    $hero_infos = getHeroInfos($id_list[$id]->id_superhero, $id_list[$id]->id_marvel);
    $actor_infos = getActorInfos($id_list[$id]->id_actor);
    $anecdote = $id_list[$id]->anecdote;

    

    $doc_title = $hero_infos->name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $doc_title?></title>
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
<body class="hero-page">
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
    <ul class="hero-nav">
        <?php for($hero_id = 0; $hero_id<count($id_list); $hero_id++){ 
            $hero_name = $id_list[$hero_id]->name ?>
            <li <?= $hero_id != $id ? '' : 'class=active' ?>>
                <a href="./heros.php?id=<?= $hero_id?>"></a>
                <span><?= $hero_name ?></span>
            </li>
        <?php }?>
    </ul>
    <!-- hero content -->
    <div class="hero-image js-character">
        <img class="normal-image js-lazy-load" src="../images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-1 js-lazy-load" src="../images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-2 js-lazy-load" src="../images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
    </div>
    <div class="content js-character">
        <div class="name-container">
            <h1><?= $hero_infos->name?></h1>
        </div>
        <h3>Played by <?= $actor_infos->name?></h3>
        <p class="main-text"><?= $hero_infos->bio?></p>
        <p><span class="bold">PLACE OF BIRTH</span> : <?= $hero_infos->birth?></p>
        <p><span class="bold">FIRST APPEARANCE</span> : <?= $hero_infos->origin?></p>
    </div>
    <!-- actor content -->
    <div class="hero-image js-actor hidden">
        <img class="normal-image js-lazy-load" src="../images/hero_actor/actor_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-1 js-lazy-load" src="../images/hero_actor/actor_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-2 js-lazy-load" src="../images/hero_actor/actor_<?= $id?>.png" alt="<?= $hero_infos->name?>">
    </div>
    <div class="content js-actor hidden">
        <div class="name-container">
            <h1><?= $actor_infos->name?></h1>
        </div>
        <h3>Playing as <?= $hero_infos->name?></h3>
        <p class="main-text"><?= $actor_infos->bio?></p>
        <p><span class="bold">OTHER MOVIES : </span><?= $actor_infos->cast?></p>
        <p><span class="bold">ANECDOTE : </span><?= $anecdote?></p>
    </div>

    <div class="bottom-gradient"></div>
    
    <div class="buttons-container">
            <div class="switch-hero active">
                <div class="bar">
                    <div class="fill-bar"></div>
                </div>
                <span class="switch-link">character</span>
            </div>
            <div class="switch-hero">
                <div class="bar">
                    <div class="fill-bar"></div>
                </div>
                <span class="switch-link">actor</span>
            </div>
        </div>
    </div>

    <div class="red-background"></div>

    <script src="../script/Nav.js"></script>
    <script src="../script/Audio.js"></script>
    <script src="../script/LazyLoading.js"></script>
    <script src="../script/HeroSwitch.js"></script>
    <script src="../script/main.js"></script>
</body>
</html>

