<?php
require_once("classItems.php");
require_once("classProduct.php");
require_once("classDetail.php");
extract($_POST);
$objP = Product::SelectPro($libelle);
$idpro = $objP->idpro;
suplyDetail::addADetail($idpro, $idappro, $qta_pro);
header("location: showSuplyDetails.php?idappro=$idappro");
