<?php
require_once("classAdmin.php");
extract($_POST);
$a = new Admin($name, $email, $pswd);
$a->addAdmin($name, $email, $pswd);
header("location: login.php");
