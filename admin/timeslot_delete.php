<?php
require_once('../Includes/config.php');
Session();
CheckRank(2);
// Voer de nieuwe data in via de delete functie
$deletetime = DeleteTime($_GET['ID']);
// Check of de data goed aangekomen is en redirect dan
if ($deletetime === true) {
    header("Location:./index.php");
} else {
    // Geef error weer als het niet goed gegaan is
    echo $deletetime;
}