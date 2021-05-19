<?php
require('../Includes/config.php');
// CheckRank(2);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
AddUser($_POST['username'], $password, $_POST['rank'], $_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['email']);
header("Location:user_new.php");