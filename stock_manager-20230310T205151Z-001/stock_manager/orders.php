<?php
require_once("classClient.php");
require_once("classOrders.php");
extract($_POST);
$ccid = Client::selectCli($nom);
$cin = $ccid->cin;
$no = new Orders($idcom, $date, $cin);
$no->addOrder();
header("location: showOrders.php");
