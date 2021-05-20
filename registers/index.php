<?php
require_once '../Includes/config.php';
Session();
CheckRank(1);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || De Schaatsliefhebber</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <th scope="col">Uitschrijven</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = SelectMyTime(ID());
            while ($row_id = $stmt->fetch()) {
                $stmt_times = SelectFromMyTimeTimes($row_id['ID_time']);
                while($row = $stmt_times->fetch()){
                    echo "<tr>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['starttime'] . "</td>";
                    echo "<td>" . $row['endtime'] . "</td>";
                    echo "<td>" . AmountSpaceFree($row['amount_people_in']) . "</td>";
                    echo "<td>" . $row_id['updated_at'] . "</td>";
                    echo '<td><a href="./unregister_proces.php?ID=' . $row_id['ID'] . '&ID_times=' . $row['ID'] . '&amount=' . $row['amount_people_in'] . '">Uitschrijven</a></td>';
                    echo "</tr>";
                }
            }
            ?>
</body>

</html>