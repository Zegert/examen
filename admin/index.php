<?php
require_once '../Includes/config.php';
Session();
CheckRank(2);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nieuw tijdstip || Admin || De Schaatsliefhebber</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a151c32758.js" crossorigin="anonymous"></script>
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
        <th scope="col">Datum</th>
        <th scope="col">Starttijd</th>
        <th scope="col">Eindtijd</th>
        <th scope="col">Plekken vrij</th>
        <th scope="col">Gemaakt op</th>
        <th scope="col">Zichtbaarheid</th>
        <th scope="col">Zie aanmeldingen</th>
        <th scope="col">Aanpassen</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $stmt = SelectAllTime();
      while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['starttime'] . "</td>";
        echo "<td>" . $row['endtime'] . "</td>";
        echo "<td>" . AmountSpaceFree($row['amount_people_in']) . "</td>";
        echo "<td>" . $row['updated_at'] . "</td>";
        if ($row['hidden'] === True) {
          echo "<td>Zichtbaar</td>";
        } else {
          echo "<td>Onzichtbaar</td>";
        }
        echo '<td><a href="./timeslot_view.php?ID=' . $row['ID'] . '"><i class="far fa-eye"></i></a></td>';
        echo '<td><a href="./timeslot_edit.php?ID=' . $row['ID'] . '"><i class="far fa-edit"></i></a></td>';
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</body>

</html>