<?php
require_once('../Includes/config.php');
Session();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maak een nieuwe gebruiker aan.</title>
    <!-- Fontawesome voor leuke icoontjes -->
    <script src="https://kit.fontawesome.com/a151c32758.js" crossorigin="anonymous"></script>
    <!-- Bootstrap voor een goed design -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Maak een account</h4>
                <form action="user_new_proces.php" method="POST">
                    <!-- Username veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Gebruikersnaam"
                            required><br>
                    </div> <!-- form-group// -->
                    <!-- Password veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Wachtwoord"
                            required><br>
                    </div> <!-- form-group// -->
                    <!-- Firstname veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-id-card"></i> </span>
                        </div>
                        <input type="text" name="firstname" class="form-control" placeholder="Voornaam" required><br>
                    </div> <!-- form-group// -->
                    <!-- Lastname veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-id-badge"></i> </span>
                        </div>
                        <input type="text" name="lastname" class="form-control" placeholder="Achternaam" required><br>
                    </div> <!-- form-group// -->
                    <!-- Adress veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-id-card"></i> </span>
                        </div>
                        <input type="text" name="adress" class="form-control" placeholder="Adres" required><br>
                    </div> <!-- form-group// -->
                    <!-- Town veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-id-badge"></i> </span>
                        </div>
                        <input type="text" name="town" class="form-control" placeholder="Plaats" required><br>
                    </div> <!-- form-group// -->
                    <!-- Phone veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-phone"></i> </span>
                        </div>
                        <input type="tel" class="form-control" name="phone" pattern="[0-9]{2}-[0-9]{8}"
                            placeholder="06-12345678" required><br>
                    </div> <!-- form-group// -->
                    <!-- Email veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="E-mailadres" required><br>
                    </div> <!-- form-group// -->
                    <!-- Member veld -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
                        </div>
                        <input type="radio" name="member" value="1" id="true" class="form-control" placeholder="Lid">
                        <label for="true">Wel lid</label>
                        <input type="radio" name="member" value="0" id="false" class="form-control" placeholder="Lid">
                        <label for="false">Geen lid</label>
                    </div> <!-- form-group// -->
                    <!-- Submit veld -->
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