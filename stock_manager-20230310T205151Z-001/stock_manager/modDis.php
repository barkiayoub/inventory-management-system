<?php
require_once("classDistributor.php");
extract($_POST);
$f = new fournisseur($idfour, $nomf, $num, $emailf, $adressf);
$f->updatefournisseur();
header("location: showDistributor.php");
