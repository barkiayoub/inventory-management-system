<?php
require_once("classDistributor.php");
extract($_POST);
fournisseur::deletefournisseur($_GET['idfour']);
header("location: showDistributor.php");
