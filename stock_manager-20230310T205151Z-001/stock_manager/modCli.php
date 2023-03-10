<?php
require_once("classClient.php");
extract($_POST);
$p = new Client($cin, $nom, $prenom, $email, $tel, $adress);
$p->updateclient();
header("location: showClient.php");
