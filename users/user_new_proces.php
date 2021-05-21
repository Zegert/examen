<?php
require('../Includes/config.php');
// Password-hash voor een beveiligde manier van opslaan
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// Functie om het naar de database te sturen
$adduser = AddUser($_POST['username'], $password, $_POST['firstname'], $_POST['lastname'], $_POST['adress'], $_POST['town'], $_POST['phone'],  $_POST['email'], $_POST['member']);
// Check of het goed is aangekomen, anders geef een errorcode weer
if ($adduser === true) {
    header("Location:../index.php");
} else {
    echo $adduser;
}
