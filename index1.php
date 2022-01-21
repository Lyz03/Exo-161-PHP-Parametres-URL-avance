<?php
$nom = strip_tags($_GET["nom"]);
$prenom = strip_tags($_GET["prenom"]);

if (isset($nom) && isset($prenom)) {
    if (!empty($nom) && !empty($prenom))
    echo $nom . "<br>" . $prenom;
}