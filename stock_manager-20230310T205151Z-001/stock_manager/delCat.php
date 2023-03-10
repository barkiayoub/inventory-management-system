<?php
require_once("classCategory.php");
extract($_POST);
$r = Category::getCat($_GET['idcat']);
$r2 = $r->__get('idcat');
$c = new Category($r2, $nomcat);
$c->deleteCat();
header("location: showCat.php");
