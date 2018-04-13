<?php
    include('views/partials/requests.php');

    $id = $_GET['id'];


    $hero_infos = getHeroInfos($id_list[$id]->id_superhero, $id_list[$id]->id_marvel);
    $actor_infos = getActorInfos($id_list[$id]->id_actor);
    $anecdote = $id_list[$id]->anecdote;

    

    $doc_title = $hero_infos->name;
?>

<body class="hero-page">
    <nav class="bars">
        <div class="bar1"></div>
        <div class="bar2"></div>
    </nav>
    <ul class="hero-nav">
        <?php for($hero_id = 0; $hero_id<count($id_list); $hero_id++){ 
            $hero_name = $id_list[$hero_id]->name ?>
            <li <?= $hero_id != $id ? '' : 'class=active' ?>>
                <a href="./heros?id=<?= $hero_id?>"></a>
                <span><?= $hero_name ?></span>
            </li>
        <?php }?>
    </ul>
    <!-- hero content -->
    <div class="hero-image js-character">
        <img class="normal-image js-lazy-load" src="images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-1 js-lazy-load" src="images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-2 js-lazy-load" src="images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
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
        <img class="normal-image js-lazy-load" src="images/hero_actor/actor_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-1 js-lazy-load" src="images/hero_actor/actor_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-2 js-lazy-load" src="images/hero_actor/actor_<?= $id?>.png" alt="<?= $hero_infos->name?>">
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
    <script src="script/HeroSwitch.js"></script>
</body>


