<?php
require_once '../Includes/config.php';
if (!isset($_SESSION['rang']) || $_SESSION['rang'] < 1) {
    header('Location: ../index.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquete site</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" rel="stylesheet">
    <link href="../Includes/student_home.css" rel="stylesheet">

</head>

<body>
    <h1>Enquete Reizen naar school</h1>
    <form action="enquete_proces.php" method="POST">
        <div class="form-group">
            <input type="number" name="distance" placeholder="Afstand naar school (km)" step=".01" required><br>
        </div>
        <div class="form-group">
            <input type="number" name="traveltime" placeholder="Reistijd (min)" required><br>
        </div>
        <div class="form-group">
            <p>Welke voermiddel(en) gebruik je om naar het GLR te reizen?</p>
            <div class="row">
                <div class="col">
                    <input type="checkbox" name="transportation[]" id="Lopend" value="Lopend">
                    <label for="Lopend">Lopend</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="transportation[]" id="Fietsend" value="Fietsend">
                    <label for="Fietsend">Fietsend</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="transportation[]" id="Trein" value="Trein">
                    <label for="Trein">Trein</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="transportation[]" id="Tram" value="Tram">
                    <label for="Tram">Tram</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="transportation[]" id="Metro" value="Metro">
                    <label for="Metro">Metro</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="transportation[]" id="Bus" value="Bus">
                    <label for="Bus">Bus</label>
                </div>
                <div class="col">
                    <input type="checkbox" name="transportation[]" id="Auto" value="Auto">
                    <label for="Auto">Auto</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <p>Wat vind je van de begintijd van de lessen (8:15 uur)?</p>
            <div class="row">
                <div class="col">
                    <input type="radio" name="starttime" id="tevroeg" value="Te vroeg">
                    <label for="tevroeg">Te vroeg</label>
                </div>
                <div class="col">
                    <input type="radio" name="starttime" id="goed" value="Goed">
                    <label for="goed">Goed</label>
                </div>
                <div class="col">
                    <input type="radio" name="starttime" id="telaat" value="Te laat">
                    <label for="telaat">Te laat</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <p>Wat vind je van de eindtijd van de lessen (17:15 uur)?</p>
            <div class="row">
                <div class="col">
                    <input type="radio" name="endtime" id="tevroeg" value="Te vroeg">
                    <label for="tevroeg">Te vroeg</label>
                </div>
                <div class="col">
                    <input type="radio" name="endtime" id="goed" value="Goed">
                    <label for="goed">Goed</label>
                </div>
                <div class="col">
                    <input type="radio" name="endtime" id="telaat" value="Te laat">
                    <label for="telaat">Te laat</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <textarea cols='70' name='comments' maxlength='255' placeholder='Verdere Opmerkingen'></textarea><br>
        </div>
        <div class="form-group">
            <input type="submit" value="Verzenden">
        </div>
        </div>
    </form>
</body>

</html>