<?php
require_once("classDistributor.php");
extract($_POST);
$a = new fournisseur($idfour, $nomf, $num, $emailf, $adressf);
$a->addfournisseur();
header("location:showDistributor.php");
