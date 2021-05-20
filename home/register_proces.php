<?php
require_once '../Includes/config.php';
Session();
CheckRank(1);
$register = Register($_GET["ID"]);
if ($register === true){
    header("Location:./index.php");
}else{
    echo $register;
}
