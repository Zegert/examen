<?php

// Begint een sessie en geeft de rank van de gebruiker terug
function Session()
{
    session_start();
    session_regenerate_id();
    if (isset($_SESSION['rank'])) {
        return $_SESSION['rank'];
    } else {
        return 0;
    }
}
// Geeft het ID van een ingelogde gebruiker terug
function ID()
{
    session_start();
    session_regenerate_id();
    if (isset($_SESSION['ID'])){
        return $_SESSION['ID'];
    }else{
        return 0;
    }
}
// Checkt of de gebruiker de ingegeven rank heeft, zo niet logt de gebruiker uit.
function CheckRank($rank)
{
    if (Session() >= $rank) {
        // Echoed de rank van de gebruiker, puur voor development.
        echo "Rank: " . Session() . " ID:" . ID();
    } else {
        header("location:https://ex83504.ict-lab.nl/logout.php");
    }
}

// Niet alle items in de nav zijn voor alle gebruikers bedoelt, deze functie checkt de rank en bepaalt dan of het wel of niet getoont wordt.
function CheckRankNav($rank, $showItem)
{
    if (Session() >= $rank) {
        $showItem;
    }
}

// Haalt een aantal rare tekens uit een string, tegen SQL injecties
function SQLInjectionFormat($string)
{
    $formatted_string = preg_replace('~[\\\\/:*?"<>|]~', ' ', $string);
    return $formatted_string;
}

// Functie verbindt met de database.
function Conn()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $dsn = "mysql:host=localhost;dbname=ex_83504";
    $DB_username = "ex83504";
    $DB_password = "Cy8o^n68";

    try {
        $conn = new PDO($dsn, $DB_username, $DB_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        $error = "Geen connectie mogelijk. Error: " . $e->getMessage();
        return $error;
    }
}
// Deze functie voegt een gebruiker toe.
function AddUser($username, $password, $firstname, $lastname, $phone, $email){
    try {
        $stmt = Conn()->prepare("INSERT INTO users(ID, username, password, rank, firstname, lastname, phone, email, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([null, SQLInjectionFormat($username), $password, 1, SQLInjectionFormat($firstname), SQLInjectionFormat($lastname), $phone, $email, null, null]);
    } catch (PDOException $e) {
        $error = "Nieuwe gebruiker niet toegevoegd. Error: " . $e->getMessage();
        return $error;
    }
}

function SelectAllTime(){
    $stmt = Conn()->prepare("SELECT * FROM times ORDER BY date DESC");
    $stmt->execute();
    return $stmt;
}

function AmountSpaceFree($amount_people_in){
    $answer = 100 - $amount_people_in;
    return $answer;
}

function Register($ID){
    try{
        $stmt_increment_times = Conn()->prepare("UPDATE times SET amount_people_in = amount_people_in + 1 WHERE ID=?");
        $stmt_increment_times->execute([$ID]);
        $stmt_insert = Conn()->prepare("INSERT INTO user_on_time(ID, ID_user, ID_time, cancelled, created_at, updated_at) VALUES (?,?,?,?,?,?)");
        $stmt_insert->execute([null, ID(), $ID, false, null, null]);
        echo "Geslaagd!";
    }catch(PDOException $e){
        echo "Reservering niet geslaagd. Error: " . $e->getMessage();
    }
        

}