<?php
require_once('../Includes/config.php');
Session();
CheckRank(2);

$addtime = AddTime($_POST['date'], $_POST['starttime'], $_POST['endtime'], $_POST['hidden']);
if ($addtime === true) {
    header("Location:./index.php");
} else {
    echo $addtime;
}
