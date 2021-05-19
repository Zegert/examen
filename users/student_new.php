<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuwe gebruiker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a151c32758.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Maak een account</h4>
                <form action="student_new_proces.php" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Gebruikersnaam"
                            required><br>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Wachtwoord"
                            required><br>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Emailadres" required><br>
                    </div><!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-house-user"></i> </span>
                        </div>
                        <input type="text" name="class" class="form-control" placeholder="Klas" required><br>
                    </div><!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="firstname" class="form-control" placeholder="Voornaam" required><br>
                    </div><!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="lastname" class="form-control" placeholder="Achternaam" required><br>
                    </div><!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                        </div>
                        <input type="text" name="adress" class="form-control" placeholder="Adres" required><br>
                    </div><!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-map"></i> </span>
                        </div>
                        <input type="text" name="postalcode" class="form-control" placeholder="Postcode" required><br>
                    </div><!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-map-marked-alt"></i> </span>
                        </div>
                        <input type="text" name="city" class="form-control" placeholder="Woonplaats" required><br>
                    </div><!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
                        </div>
                        <input type="number" name="age" class="form-control" placeholder="Leeftijd" required><br>
                    </div><!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Maak Account </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="../index.php">Log In</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div><!--container end.//-->
</body>

</html>