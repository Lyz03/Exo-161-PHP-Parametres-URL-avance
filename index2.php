<?php
if (isset($_GET["age"]) && !empty($_GET["age"])) {
    echo strip_tags($_GET["age"]);
} else {
    echo "<p>Le paramètre age n'existe pas</p>";
}