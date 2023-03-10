<?php
require_once("DAO.php");
class Suplies
{
    // Attribut
    public $idappro;
    public $datea;
    public $idfour;
    // Methodes
    function __construct($idappro, $datea, $idfour)
    {
        $this->idappro = $idappro;
        $this->datea = $datea;
        $this->idfour = $idfour;
    }
    function __get($prop)
    {
        switch ($prop) {
            case 'idappro':
                return $this->idappro;
                break;
            case 'datea':
                return $this->datea;
                break;
            case 'idfour':
                return $this->idfour;
                break;
        }
    }
    static function showSuplies()
    {
        $dao = new DAO();
        return $dao->showSup();
    }
    function addSuply()
    {
        $dao = new DAO();
        return $dao->addSuply($this->idappro, $this->datea, $this->idfour);
    }
    static function getSup($idappro)
    {
        $dao = new DAO();
        return $dao->getSup($idappro);
    }
    static function updateSup($datea, $idfour, $idappro)
    {
        $dao = new DAO();
        $dao->updateSup($datea, $idfour, $idappro);
    }
    static function deleteSup($idappro)
    {
        $dao = new DAO();
        return $dao->deleteSup($idappro);
    }
}
