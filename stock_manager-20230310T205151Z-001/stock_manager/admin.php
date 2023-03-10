<?php
require_once("classAdmin.php");
extract($_POST);
$a = new Admin("", $email, $pswd);

if ($a->estUnAdmin()) {
    session_start();
    $_SESSION['email'] = $email;
    header("location:dashboard.php");
} else {
    header("location:login.php");
}
