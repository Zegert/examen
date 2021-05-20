<?php
require_once '../Includes/config.php';
Session();
CheckRank(1);
$register = Register($_GET["ID"]);
if ($register === true) {
    CreateReserveFile($_GET["ID"]);
} else {
    echo $register;
}
