<?php
$semaine = strip_tags($_GET["semaine"]);

if (isset($semaine) && !empty($semaine)) {
    echo $semaine;
}