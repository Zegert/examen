<?php
require_once './Includes/config.php';
session_start();
$username = $_POST['inputUsername'];
$password = $_POST['inputPassword'];

$result = Conn()->prepare("SELECT * FROM users WHERE username=?");
$result->execute([$username]);
$row = $result->fetch();

if (password_verify($password, $row['password'])) {
    $_SESSION['ID']   = $row['ID'];
    $_SESSION['rank'] = $row['rank'];
    if ($_SESSION['rank'] >= 1) {
        header("Location:./home/");
    }
}else{
    header("Location: index.php");
}