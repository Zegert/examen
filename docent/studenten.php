<?php
require_once "../Includes/config.php";

if (!isset($_SESSION['rang']) || $_SESSION['rang'] < 2) {
    header('Location: ../index.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenten overzicht</title>
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
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Adres</th>
                <th scope="col">Postcode</th>
                <th scope="col">Woonplaats</th>
                <th scope="col">Leeftijd</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>

        <?php
$result = $conn->prepare("SELECT * FROM studenten ORDER BY ID DESC");
$result->execute();
while ($row = $result->fetch()) {
    echo "<tr>";
    echo "<td scope='row'>" . $row['Username'] . "</td>";
    echo "<td>" . $row['Firstname'] . "</td>";
    echo "<td>" . $row['Lastname'] . "</td>";
    echo "<td>" . $row['Adress'] . "</td>";
    echo "<td>" . $row['PostalCode'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "<td>" . $row['Age'] . " jaar</td>";
    echo "<td><a href='mailto:" . $row['email'] . "'> " . $row['email'] . "</td>";
    echo "</tr>";
}
?>
    </table>


</body>

</html>