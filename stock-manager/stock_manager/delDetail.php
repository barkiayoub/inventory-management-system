<?php
require_once("classDetail.php");
extract($_POST);
suplyDetail::deleteDetail($_GET['idappro'], $_GET['idpro']);
$idappro = $_GET['idappro'];
header("location: showSuplyDetails.php?idappro=$idappro");
