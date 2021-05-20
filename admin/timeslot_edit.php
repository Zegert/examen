<?php
require_once('../Includes/config.php');
Session();
CheckRank(2);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maak een nieuwe gebruiker aan.</title>
    <script src="https://kit.fontawesome.com/a151c32758.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
        require_once '../Includes/nav.php';
        $data = GetTimesData($_GET['ID']);
    ?>
    <div class="container">
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Update een tijdslot</h4>
                <form action="timeslot_edit_proces.php" method="POST">
                <h5 class="card-title mt-3 text-center">Datum</h5>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-calendar-alt"></i> </span>
                        </div>
                        <input type="number" name="ID" value="<?php echo $data['ID'] ?>" hidden><br>
                        <input type="date" name="date" class="form-control" placeholder="Datum" value="<?php echo $data['date'] ?>" required><br>
                    </div> <!-- form-group// -->
                    <h5 class="card-title mt-3 text-center">Begintijd</h5>
                    <p class="card-title mt-3 text-center">Minimaal 06:00</p>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-clock"></i> </span>
                        </div>
                        <input type="time" class="form-control" name="starttime" placeholder="Starttijd" min="06:00" max="22:00" value="<?php echo $data['starttime'] ?>" required><br>
                    </div> <!-- form-group// -->
                    <h5 class="card-title mt-3 text-center">Eindtijd</h5>
                    <p class="card-title mt-3 text-center">Maximaal 22:00</p>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-clock"></i> </span>
                        </div>
                        <input type="time" class="form-control" name="endtime" placeholder="Eindtijd" min="06:00" max="22:00" value="<?php echo $data['endtime'] ?>" required><br>

                    </div> <!-- form-group// -->
                    <h5 class="card-title mt-3 text-center">Reserveren groep</h5>
                    <p class="card-title mt-3 text-center">Maximaal 100 personen</p>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-users"></i> </span>
                        </div>
                        <input type="number" class="form-control" name="amount_people_in" placeholder="Grootte groep" min="0" max="100" value="<?php echo $data['amount_people_in'] ?>"><br>
                        
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Update Tijdslot </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Misklik? <a href="./index.php">Ga terug</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->
    </div>
    <!--container end.//-->
</body>

</html>