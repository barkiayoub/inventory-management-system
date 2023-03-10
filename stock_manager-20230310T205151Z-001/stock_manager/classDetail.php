<?php
require_once("DAO.php");
class suplyDetail
{
    // Attribut
    public $idappro;
    public $idpro;
    public $qta_pro;
    // Methods
    function __construct($idpro, $idappro, $qta_pro)
    {
        $this->idpro = $idpro;
        $this->idappro = $idappro;
        $this->qta_pro = $qta_pro;
    }

    static function showDetails($idappro)
    {
        $dao = new DAO();
        return $dao->showDetails($idappro);
    }
    static function deleteDetail($idappro, $idpro)
    {
        $dao = new DAO();
        return $dao->deleteDetail($idappro, $idpro);
    }
    static function addADetail($idpro, $idappro, $qta_pro)
    {
        $dao = new DAO();
        return $dao->addADetail($idpro, $idappro, $qta_pro);
    }
}
