<?php
require_once('../Includes/config.php');
Session();
CheckRank(2);
// Voer de nieuwe data in via de Add functie
$addtime = AddTime($_POST['date'], $_POST['starttime'], $_POST['endtime'], $_POST['hidden']);
// Check of de data goed aangekomen is en stuur dan terug
if ($addtime === true) {
    header("Location:./index.php");
} else {
    // Als de data niet goed aangekomen is geef error weer.
    echo $addtime;
}
