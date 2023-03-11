<?php
require_once("classCategory.php");
extract($_POST);
$c = new Category($idcat, $nomcat);
$c->updateCat();
header("location: showCat.php");
