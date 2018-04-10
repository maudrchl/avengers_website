<?php
$id_list = [
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
    array(
        'hero' => 346,
        'actor' => 3223,
    ),
];

//API's call functions
function getActorInfos($actor_id)
{
    $actor_infos = '';
    while($actor_infos == '')
    {
        $actor_infos_url = 'https://api.themoviedb.org/3/person/'.$actor_id.'?api_key='.MOVIEDB_KEY.'&language=en-US'; // name, description, birthday
        $path = './cache/'.md5($actor_infos_url);

        if(file_exists($path) && time()-filemtime($path) < 3600)
        {
            $actor_infos = file_get_contents($path);
        } else 
        {
            $actor_infos = file_get_contents($actor_infos_url);
            file_put_contents($path, $actor_infos);
        }
    }
    $actor_infos = json_decode($actor_infos);

    $actor_credits = '';
    while($actor_credits == '')
    {
        $actor_credits_url = 'https://api.themoviedb.org/3/person/'.$actor_id.'/movie_credits?api_key='.MOVIEDB_KEY.'&language=en-US'; // other roles he played
        $path = './cache/'.md5($actor_credits_url);

        if(file_exists($path) && time()-filemtime($path) < 3600)
        {
            $actor_credits = file_get_contents($path);
        } else 
        {
            $actor_credits = file_get_contents($actor_credits_url);
            file_put_contents($path, $actor_credits);
        }
    }
    $actor_credits = json_decode($actor_credits);

    $result = (object) array(
        'id' => $actor_infos->id,
        'name' => $actor_infos->name,
        'bio' => $actor_infos->biography,
        'cast' => $actor_credits->cast,
    ); // selected data

    return $result;
}

function getHeroInfos($hero_id)
{
    $hero_infos = '';
    while($hero_infos == '')
    {
        $hero_infos_url = 'http://superheroapi.com/api/'.SUPERHERO_KEY.'/'.$hero_id.'/biography';
        $path = './cache/'.md5($hero_infos_url);

        if(file_exists($path) && time() - filemtime($path) < 3600) // check cache
        {
            $hero_infos = file_get_contents($path);
        } else
        {
            $hero_infos = file_get_contents($hero_infos_url);
            file_put_contents($path, $hero_infos); // create cache
        }
    }
    $hero_infos = json_decode($hero_infos);

    $result = (object) array(
        'id' => $hero_infos->id,
        'name' => $hero_infos->name,
        'full_name' => $hero_infos->{'full-name'},
        'birth' => $hero_infos->{'place-of-birth'},
        'origin' => $hero_infos->{'first-appearance'},
    ); // selected data

    return $result;
}

/*
echo '<pre>';
print_r(getActorInfos(3223));
echo '</pre>';
*/

/*
echo '<pre>';
print_r(getHeroInfos(70));
echo '</pre>';
*/
?>