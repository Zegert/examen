<?php
require('../Includes/config.php');
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$adduser = AddUser($_POST['username'], $password, $_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['email']);
if ($adduser === true) {
    header("Location:../index.php");
} else {
    echo $adduser;
}
