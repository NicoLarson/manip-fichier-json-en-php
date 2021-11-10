<?php
$t = time();
$d = date("d-m-Y",time());
$joueur["nom"] = "Wall";
$joueur["prenom"] = "Sreet";
$joueur["age"] = 25;
$joueur["admin"] = false;
$joueur["inscrit"] = $d;

$data_json = json_encode($joueur);

echo $data_json;

// Enrengistrer un fichier
$nomfichier = "joueur.json";
$fichier = fopen($nomfichier, "w+");
fwrite($fichier, $data_json);
fclose($fichier);
