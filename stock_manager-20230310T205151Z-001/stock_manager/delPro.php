<?php
require_once("classProduct.php");
$r = Product::getPro($_GET['idpro']);
$idpro = $_GET['idpro'];
$idcat = $_GET['idcat'];
$image = $_GET['image'];
$libelle = $_GET['libelle'];
$prixu = $_GET['prixu'];
$prixv = $_GET['prixv'];
$stock = $_GET['stock'];
$c = Product::deletePro($idpro);
header("location: showPro.php");
