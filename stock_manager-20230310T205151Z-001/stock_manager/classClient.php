<?php
require_once("DAO.php");
class Client
{
    //Attribute
    public $cin;
    public $nom;
    public $prenom;
    public $email;
    public $tel;
    public $adress;

    //Methods

    function __construct($cin, $nom, $prenom, $email, $tel, $adress)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->adress = $adress;
    }

    function __get($prop)
    {
        switch ($prop) {
            case 'cin':
                return $this->cin;
                break;
            case 'nom':
                return $this->nom;
                break;
            case 'prenom':
                return $this->prenom;
                break;
            case 'email':
                return $this->email;
                break;
            case 'tel':
                return $this->tel;
                break;
            case 'adress':
                return $this->adress;
                break;
        }
    }

    function __setcin($cin, $value)
    {
        $cin = $value;
        return $cin;
    }
    function __setnom($nom, $value)
    {
        $nom = $value;
        return $nom;
    }
    function __setprenom($prenom, $value)
    {
        $prenom = $value;
        return $prenom;
    }
    function __setemail($email, $value)
    {
        $email = $value;
        return $email;
    }
    function __settel($tel, $value)
    {
        $tel = $value;
        return $tel;
    }
    function __setadress($adress, $value)
    {
        $adress = $value;
        return $adress;
    }

    function addclient()
    {
        $dao = new DAO();
        $dao->addcli($this->cin, $this->nom, $this->prenom, $this->email, $this->tel, $this->adress);
    }

    static function listeclient()
    {
        $dao = new DAO();
        return $dao->listecli();
    }

    function updateclient()
    {
        $dao = new DAO();
        $dao->updatecli($this->nom, $this->prenom, $this->email, $this->tel, $this->adress, $this->cin);
    }


    static function getclient($cin)
    {
        $dao = new DAO();
        return $dao->getcli($cin);
    }
    function deleteclient()
    {
        $dao = new DAO();
        return $dao->deletecli($this->cin);
    }
    static function selectCli($nom)
    {
        $dao = new DAO();
        return $dao->selectCli($nom);
    }
    static function SelectCliId($cin)
    {
        $dao = new DAO();
        return $dao->selectCliId($cin);
    }
}
