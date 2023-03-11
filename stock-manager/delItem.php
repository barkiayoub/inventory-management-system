<?php
require_once("classItems.php");
extract($_POST);
Items::deleteItem($_GET['idcom'], $_GET['idpro']);
$idcom = $_GET['idcom'];
header("location: showAddedItems.php?idcom=$idcom");
