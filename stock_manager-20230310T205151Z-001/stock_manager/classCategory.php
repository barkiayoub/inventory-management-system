<?php
require_once("DAO.php");
class Category
{
    //Attribute
    private $idcat;
    private $nomcat;

    //Methods

    function __construct($idcat, $nomcat)
    {
        $this->idcat = $idcat;
        $this->nomcat = $nomcat;
    }

    function __get($prop)
    {
        switch ($prop) {
            case 'idcat':
                return $this->idcat;
                break;
            case 'nomcat':
                return $this->nomcat;
                break;
        }
    }

    function __setnomcat($nomcat, $value)
    {
        $nomcat = $value;
        return $nomcat;
    }
    function __setidcat($idcat, $value)
    {
        $idcat = $value;
        return $idcat;
    }

    function addCategory($nomcat)
    {
        $dao = new DAO();
        return $dao->addCat($this->nomcat);
    }

    static function showCategory()
    {
        $dao = new DAO();
        return $dao->showCat();
    }

    function updateCat()
    {
        $dao = new DAO();
        $dao->updateCat($this->nomcat, $this->idcat);
    }

    static function getCat($idcat)
    {
        $dao = new DAO();
        return $dao->getCat($idcat);
    }

    function deleteCat()
    {
        $dao = new DAO();
        return $dao->deleteCat($this->idcat);
    }

    static function SelectCat($nomcat)
    {
        $dao = new DAO();
        return $dao->selectCat($nomcat);
    }
    static function SelectCatId($idcat)
    {
        $dao = new DAO();
        return $dao->selectCatId($idcat);
    }
}
