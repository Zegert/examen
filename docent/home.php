<?php
require_once '../Includes/config.php';
if (!isset($_SESSION['rang']) || $_SESSION['rang'] < 2) {
    header('Location: ../index.php');
}
?>
  <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Docenten Enquete Website</title>
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
<?php
    include_once("../Includes/nav.php");
?>
        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Studentnummer</th>
                <th scope="col">Klas</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Afstand naar school</th>
                <th scope="col">Reistijd</th>
                <th scope="col">Vervoersmiddel</th>
                <th scope="col">Mening over begintijd</th>
                <th scope="col">Mening over eindtijd</th>
                <th scope="col">Opmerkingen</th>
            </tr>
        </thead>
        <?php
require_once "../Includes/config.php";
$result = $conn->prepare("SELECT * FROM Enquete ORDER BY ID DESC");
$result->execute();
while ($row = $result->fetch()) {
    $resultUser = $conn->prepare("SELECT * FROM studenten WHERE ID = ?");
    $resultUser->execute([$row['StudentID']]);
    echo "<tr>";
    while ($rowUser = $resultUser->fetch()) {
        echo "<td scope='row'>" . $rowUser['Username'] . "</td>";
        echo "<td>" . $rowUser['Class'] . "</td>";
        echo "<td>" . $rowUser['Firstname'] . "</td>";
        echo "<td>" . $rowUser['Lastname'] . "</td>";
    }
    echo "<td>" . $row['Distance'] . "km</td>";
    echo "<td>" . $row['Traveltime'] . " min</td>";
    echo "<td>" . $row['Transportation'] . "</td>";
    echo "<td>" . $row['Starttime'] . "</td>";
    echo "<td>" . $row['Endtime'] . "</td>";
    echo "<td>" . $row['Comments'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
    </body>

    </html>