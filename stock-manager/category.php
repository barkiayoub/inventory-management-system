<?php
require_once("classCategory.php");
extract($_POST);
$a = new Category($idcat, $nomcat);
if (!empty($_POST["nomcat"])) {
    $a->addCategory($idcat, $nomcat);
    header("location: showCat.php");
} else {
    header("location: showCat.php");
}
