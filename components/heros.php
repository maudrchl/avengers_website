<?php
    include('./components/config.php');

    $id = $_GET('id');

    $hero_infos = getHeroInfos($id_list[$id]);
    $hero_infos = getActorInfos($id_list[$id]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

