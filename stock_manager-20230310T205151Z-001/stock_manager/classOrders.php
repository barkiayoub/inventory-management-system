<?php
require_once("DAO.php");
class Orders
{
    // Attribut
    public $idcom;
    public $date;
    public $cin;
    // Methods
    function __construct($idcom, $date, $cin)
    {
        $this->idcom = $idcom;
        $this->date = $date;
        $this->cin = $cin;
    }
    function __get($prop)
    {
        switch ($prop) {
            case 'idcom':
                return $this->idcom;
                break;
            case 'date':
                return $this->date;
                break;
            case 'cin':
                return $this->cin;
                break;
        }
    }

    static function showOrders()
    {
        $dao = new DAO();
        return $dao->showOrders();
    }
    function addOrder()
    {
        $dao = new DAO();
        return $dao->addOrder($this->idcom, $this->date, $this->cin);
    }
    static function deleteOrder($idcom)
    {
        $dao = new DAO();
        return $dao->deleteOrder($idcom);
    }
}
