<?php
require_once './Includes/config.php';
$username = $_POST['inputUsername'];
$password = $_POST['inputPassword'];

$resultDocent = $conn->prepare("SELECT * FROM docenten WHERE Username=?");
$resultDocent->execute([$username]);
$rowDocent = $resultDocent->fetch();

$resultStudent = $conn->prepare("SELECT * FROM studenten WHERE Username=?");
$resultStudent->execute([$username]);
$rowStudent = $resultStudent->fetch();

if (password_verify($password, $rowDocent['Password'])) {
    $_SESSION['ID']   = $rowDocent['ID'];
    $_SESSION['rang'] = $rowDocent['Rang'];
    if ($_SESSION['rang'] >= 2) {
        header("Location: docent/home.php");
    }
} elseif (password_verify($password, $rowStudent['Password'])) {
    $_SESSION['ID']   = $rowStudent['ID'];
    $_SESSION['rang'] = $rowStudent['Rang'];
    if ($_SESSION['rang'] >= 1) {
        header("Location: student/home.php");
    }
}else{
    header("Location: index.php");
}
