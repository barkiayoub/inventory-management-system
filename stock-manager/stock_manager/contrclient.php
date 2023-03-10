<?php
require_once("classClient.php");
extract($_POST);
$a = new Client($cin, $nom, $prenom, $email, $tel, $adress);
$a->addclient();
//echo  $nom, $prenom, $email, $tel, $adress;
header("location:showClient.php");
