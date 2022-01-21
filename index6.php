<?php
$batiment = strip_tags($_GET["batiment"]);
$salle = strip_tags($_GET["salle"]);

if (isset($batiment) && isset($salle) && !empty($batiment) && !empty($salle)) {
    echo $batiment . "<br>" . $salle;
}