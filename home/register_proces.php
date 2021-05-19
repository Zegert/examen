<?php
require_once '../Includes/config.php';
Session();
CheckRank(1);
Register($_GET["ID"]);

?>