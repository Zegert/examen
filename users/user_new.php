<?php
require_once('../Includes/config.php');
// CheckRank(2);
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
    include_once('../Includes/nav.php');
    ?>
    <div class="container">
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Maak een account</h4>
                <form action="user_new_proces.php" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Gebruikersnaam" required><br>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Wachtwoord" required><br>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                        </div>
                        <div class="form-control">
                            <input id='docent' type="radio" name='rank' value='1'>
                            <label for='docent'>User</label>
                            <input id='Admin' type="radio" name='rank' value='2'>
                            <label for='Admin'>Admin</label>
                        </div>
                    </div> <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="firstname" class="form-control" placeholder="Voornaam" required><br>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="lastname" class="form-control" placeholder="Achternaam" required><br>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="E-mailadres" required><br>
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Maak Account </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Misklik? <a href="../index.php">Ga terug</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->
    </div>
    <!--container end.//-->
</body>

</html>