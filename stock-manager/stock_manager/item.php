<?php
require_once("classItems.php");
require_once("classProduct.php");
extract($_POST);
echo "<pre>";
print_r($_POST);
echo "</pre>";
$objP = Product::SelectPro($libelle);
echo "<pre>";
print_r($idpro);
echo "</pre>";
$idpro = $objP->idpro;
Items::addAnItems($idcom, $idpro, $qte_produit);
header("location: showAddedItems.php?idcom=$idcom");
