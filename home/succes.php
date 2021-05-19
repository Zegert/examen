<?php
require_once "../Includes/config.php";

if (!isset($_SESSION['rang']) || $_SESSION['rang'] < 2) {
    header('Location: ../index.php');
}
echo "Enquete succesvol verzonden!<br>";
echo "<a href='../logout.php'>Log uit</a>";

?>