<?php
require_once '../Includes/config.php';
Session();
CheckRank(1);
// Functie om iemand de de-registreren 
$unregister = UnRegister($_GET['amount'], $_GET['ID'], $_GET['ID_times']);
// Check of het goed is aangekomen, anders geef een errorcode weer
if ($unregister === true) {
    // Iemand terug naar de vorige pagina sturen
    header("Location:./index.php");
} else {
    echo $unregister;
}
