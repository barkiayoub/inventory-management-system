<?php
require_once("classProduct.php");
require_once("classCategory.php");
$libelle = $_POST['libelle'];
$idpro = $_POST['idpro'];
$nomcat = $_POST['nomcat'];
$image = basename($_FILES['image']['name']);
$tmp_path = $_FILES['image']['tmp_name'];
$path = 'uploads/' . $image;
move_uploaded_file($tmp_path, $path);
$prixu = $_POST['prixu'];
$prixv = $_POST['prixv'];
$stock = $_POST['stock'];
$s = Category::SelectCat($nomcat);
$idcat = $s->idcat;
$p = new Product($idpro, $idcat, $image, $libelle, $prixu, $prixv, $stock);
$p->addProduit();
header("location: showPro.php");
