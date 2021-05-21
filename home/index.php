<?php
// required het functie bestand
require_once '../Includes/config.php';
// Begint een session
Session();
// Checkt of de rank even hoog of hoger is dan de ingegeven int
CheckRank(1);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || De Schaatsliefhebber</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" rel="stylesheet">
    <link href="../Includes/CSS/home.css" rel="stylesheet">

</head>

<body>
    <?php
    require_once '../Includes/nav.php';
    ?>
    <table class="table table-striped ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Datum</th>
                <th scope="col">Starttijd</th>
                <th scope="col">Eindtijd</th>
                <th scope="col">Plekken vrij</th>
                <th scope="col">Gemaakt op</th>
                <th scope="col">Inschrijven</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Select alle times-velden uit de database
            $stmt = SelectAllTime();
            while ($row = $stmt->fetch()) {
                echo "<tr>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['starttime'] . "</td>";
                echo "<td>" . $row['endtime'] . "</td>";
                echo "<td>" . AmountSpaceFree($row['amount_people_in']) . "</td>";
                echo "<td>" . $row['updated_at'] . "</td>";
                echo '<td><a href="./register_proces.php?ID=' . $row['ID'] . '">Inschrijven</a></td>';
                echo "</tr>";
            }
            ?>
</body>

</html>