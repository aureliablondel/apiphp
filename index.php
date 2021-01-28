<?php
// on charge en premier le fichier autoload
require('vendor/autoload.php');

// si mon url est différente de l'url en cours (HTTP_HOST), cad que je ne suis pas en ligne, heroku charge le fichier .env
// .env a permis de stocker le token pour qu'il ne soit pas accessible
// ca permet de cacher la clé qd mon appli est en ligne

if($_SERVER['HTTP_HOST'] != "api-slack-aure.herokuapp.com"){

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

}

$ary = array('token' => $_ENV['TOKEN']);
$data = json_encode($ary); // transforme donnée en json

echo($data);

