<?php
require_once("classNote.php");
extract($_POST);
print_r($_POST);
Note::deleteNote($_GET['idnote']);
header("location: dashboard.php");
