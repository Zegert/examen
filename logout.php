<?php
require_once("./Includes/config.php");
$_SESSION['rank'] === 0;
$_SESSION['ID'] === 0;
session_destroy();
header("location:index.php");
?>