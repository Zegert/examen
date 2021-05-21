<?php
require_once('../Includes/config.php');
Session();
CheckRank(2);
// Voer de nieuwe data in via de update functie
$addtime = UpdateTime($_POST['date'], $_POST['starttime'], $_POST['endtime'], $_POST['amount_people_in'], $_POST['hidden'], $_POST['ID']);
// Check of de data goed aangekomen is en redirect dan
if ($addtime === true) {
    header("Location:./index.php");
} else {
    // Geef error weer als het niet goed gegaan is
    echo $addtime;
}