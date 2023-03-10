<?php
require_once("classDistributor.php");
require_once("classSuplies.php");
extract($_POST);
$supid = fournisseur::selectFour($_POST['nomf']);
$idfour = $supid->idfour;
$supp = new Suplies($idappro, $datea, $idfour);
$supp = $supp->updateSup($datea, $idfour, $idappro);
header("location: showSuplies.php");
