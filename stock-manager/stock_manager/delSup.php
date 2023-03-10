<?php
require_once("classSuplies.php");
extract($_POST);
Suplies::deleteSup($_GET['idappro']);

header("location: showSuplies.php");
