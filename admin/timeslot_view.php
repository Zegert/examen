<?php
require_once '../Includes/config.php';
Session();
CheckRank(2);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zie aanmeldingen || Admin || De Schaatsliefhebber</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" rel="stylesheet">
    <link href="../Includes/CSS/home.css" rel="stylesheet">

</head>

<body>
    <?php
    require_once '../Includes/nav.php';
    ?>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link">Tijdstippen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./timeslot_create.php">Maak nieuw tijdstip aan</a>
        </li>
    </ul>
    <table class="table table-striped ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Gebruikersnaam</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Adres</th>
                <th scope="col">Plaats</th>
                <th scope="col">Lid</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = SelectUserIDsFromReservation($_GET['ID']);
            while ($row_id = $stmt->fetch()) {
                $stmt_users = GetUserData($row_id['ID_user']);
                while ($row = $stmt_users->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['adress'] . "</td>";
                    echo "<td>" . $row['town'] . "</td>";
                    if ($row['member'] === 1){
                        echo "<td>Lid</td>";
                    }else{
                        echo "<td>Geen lid</td>";
                    } 
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>