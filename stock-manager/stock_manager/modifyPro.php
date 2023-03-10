<?php
require_once("classProduct.php");
require_once("classCategory.php");
extract($_POST);
$n = Category::SelectCat($_POST['nomcat']);
$idcat = $n->idcat;
$image = basename($_FILES['image']['name']);
$tmp_path = $_FILES['image']['tmp_name'];
$path = 'uploads/' . $image;
move_uploaded_file($tmp_path, $path);
$p = new Product($idpro, $idcat, $image, $libelle, $prixu, $prixv, $stock);
$p = $p->updatePro($idcat, $image, $libelle, $prixu, $prixv, $stock, $idpro);
header("location: showPro.php");
