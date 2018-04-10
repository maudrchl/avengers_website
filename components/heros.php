<?php
    include('config.php');
    include('requests.php');

    $id = $_GET['id'];

    $hero_infos = getHeroInfos($id_list[$id]['hero']);
    $actor_infos = getActorInfos($id_list[$id]['actor']);

    $doc_title = $hero_infos->name;

    include('header.php');
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
</head>
<body class="hero-page">
    <nav class="hero-nav">
    </nav>
    <div class="hero-image">
        <img class="normal-image" src="../images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-1" src="../images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
        <img class="color-image-2" src="../images/hero_actor/hero_<?= $id?>.png" alt="<?= $hero_infos->name?>">
    </div>
    <div class="content">
        <h1><?= $hero_infos->name?></h1>
        <h3>Played by <?= $actor_infos->name?></h3>
        <p class="main-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus incidunt dignissimos animi esse amet autem, quasi omnis placeat impedit voluptate possimus eum earum aliquam repellat illum, pariatur commodi dolorum!</p>
        <p>PLACE OF BIRTH : <?= $hero_infos->birth?></p>
        <p>FIRST APPEARANCE : <?= $hero_infos->origin?></p>
    </div>
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
    <div class="red-background"></div>
</body>
</html>

