<?php
require_once("classDistributor.php");
require_once("classSuplies.php");
extract($_POST);
$sid = fournisseur::selectFour($nomf);
$idfour = $sid->idfour;
$su = new Suplies($idappro, $datea, $idfour);
$su->addSuply();
header("location: showSuplies.php");
