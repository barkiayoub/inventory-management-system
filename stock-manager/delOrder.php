<?php
require_once("classOrders.php");
extract($_POST);
Orders::deleteOrder($_GET['idcom']);
header("location: showOrders.php");
