<?php
require_once("DAO.php");
class Product
{
    // Attribut
    public $idpro;
    public $idcat;
    public $image;
    public $libelle;
    public $prixu;
    public $prixv;
    public $stock;

    // Methods
    function __construct($idpro, $idcat, $image, $libelle, $prixu, $prixv, $stock)
    {
        $this->idpro = $idpro;
        $this->idcat = $idcat;
        $this->image = $image;
        $this->libelle = $libelle;
        $this->prixu = $prixu;
        $this->prixv = $prixv;
        $this->stock = $stock;
    }

    function addProduit()
    {
        $dao = new DAO();
        return $dao->addPro($this->idcat, $this->image, $this->libelle, $this->prixu, $this->prixv, $this->stock);
    }

    static function showProduit()
    {
        $dao = new DAO();
        return $dao->showProd();
    }
    static function returnPro()
    {
        $dao = new DAO();
        return $dao->returnPro();
    }

    static function getPro($idpro)
    {
        $dao = new DAO();
        return $dao->getPro($idpro);
    }
    static function deletePro($idpro)
    {
        $dao = new DAO();
        return $dao->deletePro($idpro);
    }

    static function updatePro($idcat, $image, $libelle, $prixu, $prixv, $stock, $idpro)
    {
        $dao = new DAO();
        $dao->updatePro($idcat, $image, $libelle, $prixu, $prixv, $stock, $idpro);
    }
    static function SelectPro($libelle)
    {
        $dao = new DAO();
        return $dao->SelectPro($libelle);
    }
    static function SelectProId($idpro)
    {
        $dao = new DAO();
        return $dao->selectProId($idpro);
    }
}
