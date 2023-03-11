<?php
require_once("DAO.php");
class Note
{
    //Attribut
    public $idnote;
    public $note;
    //Methodes
    function __construct($idnote, $note)
    {
        $this->idnote = $idnote;
        $this->note = $note;
    }

    static function addNote($note)
    {
        $dao = new DAO();
        return $dao->addNote($note);
    }

    static function showNote()
    {
        $dao = new DAO();
        return $dao->showNote();
    }
    static function deleteNote($idnote)
    {
        $dao = new DAO();
        return $dao->deleteNote($idnote);
    }
}
