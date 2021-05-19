<?php
require('../Includes/config.php');

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $checkUsername = $conn->prepare("SELECT * FROM studenten WHERE Username = ?");
    $checkUsername->execute([$_POST['username']]);
    if(!$checkUsername->rowCount() > 0){

        try {
            $stmt = $conn->prepare("INSERT INTO studenten(ID, Username, Password, Class, Firstname, Lastname, Adress, PostalCode, City, Age, email, Rang)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([null, $_POST['username'], $password, $_POST['class'], $_POST['firstname'], $_POST['lastname'], $_POST['adress'], $_POST['postalcode'], $_POST['city'], $_POST['age'], $_POST['email'], 1]);
        echo "Succesvol toegevoegd.";
        echo "<a href='../index.php'>Log in</a>";    
    } catch (PDOException $e) {
        echo "Nieuwe gebruiker niet toegevoegd. Error: " . $e;
    }
}else{
    echo "Gebruikersnaam:" . $_POST['username'] . " is niet meer beschikbaar. Probeer een andere. <br>";
    echo "<a href='student_new.php'>Ga terug</a>";
}
}else {
    echo "Emailadres: " . $_POST['email'] . " is geen geldig emailadres. Probeer een andere <br>";
    echo "<a href='student_new.php'>Ga terug</a>";
}
