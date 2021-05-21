<?php
require_once '../Includes/config.php';
Session();
CheckRank(1);
// Schrijft een gebruiker in op het gekozen times-veld
$register = Register($_GET["ID"]);
// Checkt of het inschrijven goed gegaan is en maakt dan een reserveringsbestand
if ($register === true) {
    CreateReserveFile($_GET["ID"]);
} else {
    // Geeft de error weer, als het niet goed gegaan is
    echo $register;
}
