<?php
require_once('../Includes/config.php');
Session();
CheckRank(2);

$addtime = UpdateTime($_POST['date'], $_POST['starttime'], $_POST['endtime'], $_POST['amount_people_in'], $_POST['ID']);
if ($addtime === true) {
    header("Location:./index.php");
} else {
    echo $addtime;
}