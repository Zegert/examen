<?php
// required het functie bestand
require_once './Includes/config.php';
// begint een sessie
Session();
// Haalt de ingevoerde data op, en haalt met een functie er een paar tekens uit
$username = SQLInjectionFormat($_POST['inputUsername']);
$password = SQLInjectionFormat($_POST['inputPassword']);

// Haal de data van de ingevoerde username op
$result = Conn()->prepare("SELECT * FROM users WHERE username=?");
$result->execute([$username]);
$row = $result->fetch();

// Gebruik de PHP functie om een password te verifieren.
if (password_verify($password, $row['password'])) {
    // Begin 2 sessies die gecheckt worden op elke pagina
    $_SESSION['ID']   = $row['ID'];
    $_SESSION['rank'] = $row['rank'];
    // Check of de sessie rank hoger is dan 1 oftewel geverifieerd
    if ($_SESSION['rank'] >= 1) {
        // Stuurt iemand door.
        header("Location:./home/");
    }
}else{
    // Stuurt iemand terug
    header("Location: index.php");
}