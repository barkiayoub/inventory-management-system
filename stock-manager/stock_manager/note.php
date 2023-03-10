<?php
require_once("classNote.php");
extract($_POST);
Note::addNote($note);
header("location: dashboard.php");
