<?php
// Haal het functie bestand op
require_once("./Includes/config.php");
// maak sessies leeg
$_SESSION['rank'] = 0;
$_SESSION['ID'] = 0;
// Vernietig sessies
session_destroy();
// Stuur iemand naar de inlog pagina
header("location:index.php");
