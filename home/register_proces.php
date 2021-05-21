<html>
<head>
    <!-- Haal bootstrap op via CDN -->
    <script src="https://kit.fontawesome.com/a151c32758.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" rel="stylesheet">
    <link href="../Includes/CSS/home.css" rel="stylesheet">
    <!-- Haal eigen CSS op -->
	<link href="./Includes/CSS/index.css" rel="stylesheet">
    <title>Reservering verwerk</title>
</head>
<body>
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
?>
</body>
</html>
