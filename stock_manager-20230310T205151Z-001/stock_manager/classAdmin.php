<?php
require_once("DAO.php");
class Admin
{
    private $name;
    private $email;
    private $pswd;


    function __construct($n, $e, $p)
    {
        $this->name = $n;
        $this->email = $e;
        $this->pswd = $p;
    }

    function __get($prop)
    {
        switch ($prop) {
            case 'name':
                return $this->name;
                break;
            case 'email':
                return $this->email;
                break;
            case 'pswd':
                return $this->pswd;
                break;
        }
    }

    function estUnAdmin()
    {
        $dao = new DAO();
        return $dao->authentification($this->email, $this->pswd);
    }

    function addAdmin($name, $email, $pswd)
    {
        $dao = new DAO();
        return $dao->signup($this->name, $this->email, $this->pswd);
    }
}
