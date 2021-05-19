<?php
require('../Includes/config.php');
if (!isset($_SESSION['rang']) || $_SESSION['rang'] < 3) {
    header('Location: ../index.php');
}
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
    $stmt = $conn->prepare("INSERT INTO docenten(ID, username, password, rang) 
        VALUES (?, ?, ?, ?)");
    $stmt->execute([null, $_POST['username'], $password, $_POST['rang']]);
} catch (PDOException $e) {
    echo "Nieuwe gebruiker niet toegevoegd. Error: " . $e;
}
header("Location:docent_new.php");