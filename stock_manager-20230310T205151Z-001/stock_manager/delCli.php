<?php
require_once("classClient.php");
extract($_POST);
$r = Client::getclient($_GET['cin']);
$r2 = $r->__get('cin');
$c = new Client($r2, $cin, $nom, $prenom, $email, $tel, $adress);
$c->deleteclient();
header("location: showClient.php");