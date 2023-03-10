<?php
require_once("DAO.php");
class Items
{
    // Attribut
    public $idcom;
    public $idpro;
    public $qte_produit;
    // Methods
    function __construct($idcom, $idpro, $qte_produit)
    {
        $this->idcom = $idcom;
        $this->idpro = $idpro;
        $this->qte_produit = $qte_produit;
    }

    static function showItems($idcom)
    {
        $dao = new DAO();
        return $dao->showItems($idcom);
    }
    static function addAnItems($idcom, $idpro, $qte_produit)
    {
        $dao = new DAO();
        return $dao->addAnItems($idcom, $idpro, $qte_produit);
    }
    static function deleteItem($idcom, $idpro)
    {
        $dao = new DAO();
        return $dao->deleteItem($idcom, $idpro);
    }
    static function SelectItemId($idcom)
    {
        $dao = new DAO();
        return $dao->selectItemId($idcom);
    }
}
