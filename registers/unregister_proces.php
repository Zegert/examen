<?php
require_once '../Includes/config.php';
Session();
CheckRank(1);
$unregister = UnRegister($_GET['amount'], $_GET['ID'], $_GET['ID_times']);
if ($unregister === true) {
    header("Location:./index.php");
} else {
    echo $unregister;
}
