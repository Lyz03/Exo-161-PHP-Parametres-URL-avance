<?php
$langage = strip_tags($_GET["langage"]);
$serveur = strip_tags($_GET["serveur"]);

if (isset($langage) && isset($serveur) && !empty($langage) && !empty($serveur)) {
    echo $langage . "<br>" . $serveur;
}
