<?php

//API KEYS
define('MOVIEDB_KEY', '17585dc135dd3774be90d8e921d64fd1');
define('SUPERHERO_KEY', '1573083546094106');
define('MARVEL_PUBLIC','a6355bf0ea4d86c77f1af2ef45aa6e66');
define('MARVEL_PRIVATE','27cd970943f92e68fffb42a87f1bbbdd5e32ad83');

//DATABASE LOGIN
define('DB_NAME', 'avengers_database');
define('DB_HOST', 'localhost');
define('DB_PORT', '8889');
define('DB_USER', 'root');
define('DB_PASS', 'root');

try{
    $pdo = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT, DB_USER, DB_PASS);
    // Set fetch mode to object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch(PDOException $e){
    die('could not connect');
}
/*
$toto = [
    [620, 1009610, 1136406],
    [346, 1009368, 3223],
    [659, 1009664, 16828],
    [697, 1009697, 6162],
    [149, 1009220, 74568],
    [630, 1010733, 73457],
    [106, 1009187, 1136406],
    [332, 1009351, 103],
    [714, 1010740, 60898],
    [107, 1009189, 1245],
];

for($i=1; $i<10; $i++){
    $exec = $pdo->exec('INSERT INTO characters (id_website, id_marvel, id_superhero, id_actor) VALUES ('.$i.', '.$toto[$i][1].', '.$toto[$i][0].', '.$toto[$i][2].')');
}
*/

?>