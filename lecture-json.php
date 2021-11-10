<?php
$nom_fichier = "joueur.json";
$fichier = fopen($nom_fichier, "r+");
$data_json = fgets($fichier);
fclose($fichier);

$tableau = json_decode($data_json, true);

var_dump($tableau) ;