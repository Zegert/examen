<?php
require_once("./Includes/config.php");
$conn = null;
$_SESSION['rang'] === 0;
$_SESSION['ÍD'] === 0;
session_destroy();
header("location:index.php");
?>