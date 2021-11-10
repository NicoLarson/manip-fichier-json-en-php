<?php
session_start();

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$age = htmlspecialchars($_POST['age']);

$_SESSION['nom'] = $nom;

setcookie('nom', $nom, time() + 3600, "", "", false, true);
setcookie('prenom', $prenom, time() + 3600, "", "", false, true);
setcookie('age', $age, time() + 3600, "", "", false, true);

echo var_dump($_COOKIE);
echo var_dump($_SESSION);


echo $nom;
echo '<br><a href="index.php">Home</a>';



header('Location: index.php');