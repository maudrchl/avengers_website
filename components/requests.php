<?php
//ASK DATABASE
$query = $pdo->query('SELECT * FROM characters');
$query = $query->fetchAll();

$id_list = [];

foreach($query as $character){
    array_push($id_list, $character);
}

//ASK APIs
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
        'cast' => $actor_credits->cast[0]->title.', '.$actor_credits->cast[1]->title.', '.$actor_credits->cast[2]->title,
    ); // selected data

    return $result;
}

function getHeroInfos($hero_id, $marvel_id)
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

    $hero_bio = '';
    while($hero_bio == '')
    {
        $ts = time();
        $hero_bio_key = md5($ts.MARVEL_PRIVATE.MARVEL_PUBLIC);
        $hero_bio_url = 'http://gateway.marvel.com/v1/public/characters/'.$marvel_id.'?ts='.$ts.'&apikey='.MARVEL_PUBLIC.'&hash='.$hero_bio_key;
        $path = './cache/'.md5($hero_bio_url);
        if(file_exists($path) && time() - filemtime($path) < 3600) // check cache
        {
            $hero_bio = file_get_contents($path);
        } else
        {
            $hero_bio = file_get_contents($hero_bio_url);
            file_put_contents($path, $hero_bio); // create cache
        }
    }
    $hero_bio = json_decode($hero_bio);
/*
    echo '<pre>';
    print_r($hero_bio);
    echo '</pre>';
    die('ok');
*/
    $result = (object) array(
        'id' => $hero_infos->id,
        'name' => $hero_infos->name,
        'full_name' => $hero_infos->{'full-name'},
        'bio' => $hero_bio->data->results[0]->description,
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