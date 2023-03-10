<?php
require_once("DAO.php");
class fournisseur
{
    //Attribute
    public $idfour;
    public $nomf;
    public $num;
    public $emailf;
    public $adressf;

    //Methods

    function __construct($idfour, $nomf, $num, $emailf, $adressf)
    {
        $this->idfour = $idfour;
        $this->nomf = $nomf;
        $this->num = $num;
        $this->emailf = $emailf;
        $this->adressf = $adressf;
    }

    function __get($prop)
    {
        switch ($prop) {
            case 'idfour':
                return $this->idfour;
                break;
            case 'nomf':
                return $this->nomf;
                break;
            case 'num':
                return $this->num;
                break;
            case 'emailf':
                return $this->emailf;
                break;
            case 'adressf':
                return $this->adressf;
                break;
        }
    }

    function __setnomf($nomf, $value)
    {
        $nomf = $value;
        return $nomf;
    }
    function __setnum($num, $value)
    {
        $num = $value;
        return $num;
    }
    function __setemailf($emailf, $value)
    {
        $emailf = $value;
        return $emailf;
    }
    function __setadressf($adressf, $value)
    {
        $adressf = $value;
        return $adressf;
    }

    function addfournisseur()
    {
        $dao = new DAO();
        $dao->addfour($this->nomf, $this->num, $this->emailf, $this->adressf);
    }

    static function listefournisseur()
    {
        $dao = new DAO();
        return $dao->listefour();
    }

    function updatefournisseur()
    {
        $dao = new DAO();
        $dao->updatefour($this->nomf, $this->num, $this->emailf, $this->adressf, $this->idfour);
    }

    static function getfournisseur($idfour)
    {
        $dao = new DAO();
        return $dao->getfour($idfour);
    }

    static function deletefournisseur($idfour)
    {
        $dao = new DAO();
        $dao->deletefour($idfour);
    }
    static function selectFour($nomf)
    {
        $dao = new DAO();
        return $dao->selectFour($nomf);
    }
    static function SelectFourId($idfour)
    {
        $dao = new DAO();
        return $dao->selectFourId($idfour);
    }
    static function getfour($idfour)
    {
        $dao = new DAO();
        return $dao->getfour($idfour);
    }
}
