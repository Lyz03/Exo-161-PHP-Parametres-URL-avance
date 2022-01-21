<?php
$debut = $_GET["dateDebut"];
$fin = $_GET["dateFin"];
if (isset($debut) && isset($fin) && !empty($debut) && !empty($fin)){
    echo strip_tags($fin) . "<br>" . strip_tags($debut);
}