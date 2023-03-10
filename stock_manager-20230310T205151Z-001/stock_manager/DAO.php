<?php
require_once("classCategory.php");
class DAO
{
    function getPDO()
    {
        return new PDO("mysql:host=localhost;dbname=stock_manager", "root", "");
    }

    ////////////////////////////////////////// sign in/sign up  /////////////////////////////////////////////////////////////////

    function authentification($email, $pswd)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM admin WHERE email=? and pswd =? ;");
        $res->execute(array($email, $pswd));

        if ($res->fetch()) return True;
        return False;
    }

    function signup($name, $email, $pswd)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO admin(name,email,pswd) VALUES (?,?,?);");
        $res->execute(array($name, $email, $pswd));
    }
    ////////////////////////////////////////// Note  /////////////////////////////////////////////////////////////////
    function addNote($note)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO notes(note) VALUES (?);");
        $res->execute(array($note));
    }

    function showNote()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM notes;");
        $res->execute();
        $lst = [];
        while ($ligne = $res->fetch()) {
            $lst[] = new Note($ligne["idnote"], $ligne["note"]);
        }
        return $lst;
    }
    function deleteNote($idnote)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" DELETE FROM notes WHERE idnote=?; ");
        $res->execute(array($idnote));
    }
    ////////////////////////////////////////// Category  /////////////////////////////////////////////////////////////////

    function addCat($nomcat)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO categorie(nomcat) VALUES (?);");
        $res->execute(array($nomcat));
    }

    function showCat()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM categorie;");
        $res->execute();
        $lst = [];
        while ($ligne = $res->fetch()) {
            $lst[] = new Category($ligne["idcat"], $ligne["nomcat"]);
        }
        return $lst;
    }

    function updateCat($nomcat, $idcat)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("UPDATE categorie SET nomcat=? WHERE idcat=?; ");
        $res->execute(array($nomcat, $idcat));
    }

    function getCat($idcat)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM categorie where idcat=?;");
        $res->execute(array($idcat));

        if ($ligne = $res->fetch()) {
            return new Category($ligne["idcat"], $ligne["nomcat"]);
        }
        return null;
    }

    function deleteCat($idcat)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" DELETE FROM categorie WHERE idcat=?; ");
        $res->execute(array($idcat));
    }

    ////////////////////////////////////////// Produit  /////////////////////////////////////////////////////////////////

    function addPro($idcat, $image, $libelle, $prixu, $prixv, $stock)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO produit (idcat, image, libelle, prixu, prixv, stock) VALUES (?,?,?,?,?,?);");
        $res->execute(array($idcat, $image, $libelle, $prixu, $prixv, $stock));
    }

    function selectCat($nomcat)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM categorie WHERE nomcat =?; ");
        $res->execute(array($nomcat));
        if ($ligne = $res->fetch()) {
            return new Category($ligne["idcat"], $ligne["nomcat"]);
        }
    }
    function selectCatId($idcat)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM categorie WHERE idcat =?; ");
        $res->execute(array($idcat));
        if ($ligne = $res->fetch()) {
            return new Category($ligne["idcat"], $ligne["nomcat"]);
        }
    }

    function showProd()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM produit;");
        $res->execute();
        $lst2 = [];
        while ($ligne = $res->fetch()) {
            $lst2[] = new Product($ligne["idpro"], $ligne["idcat"], $ligne["image"], $ligne["libelle"], $ligne["prixu"], $ligne["prixv"], $ligne["stock"]);
        }
        return $lst2;
    }
    function returnPro()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM produit; ");
        $res->execute(array());
        if ($ligne = $res->fetch()) {
            return new Product($ligne["idpro"], $ligne["idcat"], $ligne["image"], $ligne["libelle"], $ligne["prixu"], $ligne["prixv"], $ligne["stock"]);
        }
    }

    function getPro($idpro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM produit where idpro=?;");
        $res->execute(array($idpro));

        if ($ligne = $res->fetch()) {
            return new Product($ligne["idpro"], $ligne["idcat"], $ligne["image"], $ligne["libelle"], $ligne["prixu"], $ligne["prixv"], $ligne["stock"]);
        }
        return null;
    }

    function deletePro($idpro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" DELETE FROM produit WHERE idpro=?; ");
        $res->execute(array($idpro));
    }

    function updatePro($idcat, $image, $libelle, $prixu, $prixv, $stock, $idpro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("UPDATE produit SET idcat=?,image=?,libelle=?,prixu=?,prixv=?,stock=? WHERE idpro=?; ");
        $res->execute(array($idcat, $image, $libelle, $prixu, $prixv, $stock, $idpro));
    }
    function SelectPro($libelle)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM produit WHERE libelle =?; ");
        $res->execute(array($libelle));
        if ($ligne = $res->fetch()) {
            return new Product($ligne["idpro"], $ligne["idcat"], $ligne["image"], $ligne["libelle"], $ligne["prixu"], $ligne["prixv"], $ligne["stock"]);
        }
    }
    function selectProId($idpro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM produit WHERE idpro =?; ");
        $res->execute(array($idpro));
        if ($ligne = $res->fetch()) {
            return new Product($ligne["idpro"], $ligne["idcat"], $ligne["image"], $ligne["libelle"], $ligne["prixu"], $ligne["prixv"], $ligne["stock"]);
        }
    }

    ////////////////////////////////////////// Orders section /////////////////////////////////////////////////////////////////
    function showOrders()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM commande;");
        $res->execute();
        $lst2 = [];
        while ($ligne = $res->fetch()) {
            $lst2[] = new Orders($ligne["idcom"], $ligne["date"], $ligne["cin"]);
        }
        return $lst2;
    }

    function addOrder($idcom, $date, $cin)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO commande (idcom,date, cin) VALUES (?,?,?);");
        $res->execute(array($idcom, $date, $cin));
    }
    function deleteOrder($idcom)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" DELETE FROM commande WHERE idcom=?; ");
        $res->execute(array($idcom));
    }

    ////////////////////////////////////////// Client section /////////////////////////////////////////////////////////////////

    function addcli($cin, $nom, $prenom, $email, $tel, $adress)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO client values (?,?,?,?,?,?)");
        $res->execute(array($cin, $nom, $prenom, $email, $tel, $adress));
    }

    function listecli()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM client;");
        $res->execute();
        $lst = [];
        while ($ligne = $res->fetch()) {
            $lst[] = new client($ligne["cin"], $ligne["nom"], $ligne["prenom"], $ligne["email"], $ligne["tel"], $ligne["adress"]);
        }
        return $lst;
    }

    function updatecli($nom, $prenom, $email, $tel, $adress, $cin)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" UPDATE client SET nom=?, prenom=?, email=?, tel=?, adress=? WHERE cin=?; ");
        $res->execute(array($nom, $prenom, $email, $tel, $adress, $cin));
    }

    function getcli($cin)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM client where cin=?;");
        $res->execute(array($cin));

        if ($ligne = $res->fetch()) {
            return new client($ligne["cin"], $ligne["nom"], $ligne["prenom"], $ligne["email"], $ligne["tel"], $ligne["adress"]);
        }
        return null;
    }

    function deletecli($cin)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" DELETE FROM client WHERE cin=?; ");
        $res->execute(array($cin));
    }
    function selectCli($nom)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM client WHERE nom =?; ");
        $res->execute(array($nom));
        if ($ligne = $res->fetch()) {
            return new Client($ligne["cin"], $ligne["nom"], $ligne["prenom"], $ligne["email"], $ligne["tel"], $ligne["adress"]); //$cin, $nom, $prenom, $email, $tel, $adress
        }
    }
    function selectCliId($cin)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM client WHERE cin =?; ");
        $res->execute(array($cin));
        if ($ligne = $res->fetch()) {
            return new Client($ligne["cin"], $ligne["nom"], $ligne["prenom"], $ligne["email"], $ligne["tel"], $ligne["adress"]); //$idfour, $nomf, $num, $emailf, $adressf
        }
    }

    ////////////////////////////////////////// Items section /////////////////////////////////////////////////////////////////
    function showItems($idcom)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM contenir WHERE idcom=?;");
        $res->execute(array($idcom));
        $lst2 = [];
        while ($ligne = $res->fetch()) {
            $lst2[] = new Items($ligne["idcom"], $ligne["idpro"], $ligne["qte_produit"]);
        }
        return $lst2;
    }

    function addAnItems($idcom, $idpro, $qte_produit)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO contenir values (?,?,?)");
        $res->execute(array($idcom, $idpro, $qte_produit));
    }
    function deleteItem($idcom, $idpro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" DELETE FROM contenir WHERE idcom=? AND idpro=?; ");
        $res->execute(array($idcom, $idpro));
    }
    function selectItemId($idcom)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM contenir WHERE idcom =?; ");
        $res->execute(array($idcom));
        if ($ligne = $res->fetch()) {
            return new Items($ligne["idcom"], $ligne["idpro"], $ligne["qte_produit"]);
        }
    }

    ////////////////////////////////////////// Fournisseur section /////////////////////////////////////////////////////////////////

    function addfour($nomf, $num, $emailf, $adressf)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO fournisseur (nomf,num,emailf,adressf) values (?,?,?,?);");
        $res->execute(array($nomf, $num, $emailf, $adressf));
    }

    function listefour()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM fournisseur;");
        $res->execute();
        $lst = [];
        while ($ligne = $res->fetch()) {
            $lst[] = new fournisseur($ligne["idfour"], $ligne["nomf"], $ligne["num"], $ligne["emailf"], $ligne["adressf"]);
        }
        return $lst;
    }

    function updatefour($nomf, $num, $emailf, $adressf, $idfour)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("UPDATE fournisseur SET nomf=?, num=?, emailf=?, adressf=? WHERE idfour=?; ");
        $res->execute(array($nomf, $num, $emailf, $adressf, $idfour));
    }

    function getfour($idfour)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM fournisseur where 	idfour=?;");
        $res->execute(array($idfour));

        if ($ligne = $res->fetch()) {
            return new fournisseur($ligne["idfour"], $ligne["nomf"], $ligne["num"], $ligne["emailf"], $ligne["adressf"]);
        }
        return null;
    }

    function deletefour($idfour)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("DELETE FROM fournisseur WHERE idfour=?;");
        $res->execute(array($idfour));
    }
    function selectFour($nomf)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM fournisseur WHERE nomf =?; ");
        $res->execute(array($nomf));
        if ($ligne = $res->fetch()) {
            return new fournisseur($ligne["idfour"], $ligne["nomf"], $ligne["num"], $ligne["emailf"], $ligne["adressf"]); //$idfour, $nomf, $num, $emailf, $adressf
        }
    }
    function selectFourId($idfour)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" SELECT * FROM fournisseur WHERE idfour =?; ");
        $res->execute(array($idfour));
        if ($ligne = $res->fetch()) {
            return new fournisseur($ligne["idfour"], $ligne["nomf"], $ligne["num"], $ligne["emailf"], $ligne["adressf"]); //$idfour, $nomf, $num, $emailf, $adressf
        }
    }

    ////////////////////////////////////////// Supplies section /////////////////////////////////////////////////////////////////

    function showSup()
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM appro;");
        $res->execute();
        $lst2 = [];
        while ($ligne = $res->fetch()) {
            $lst2[] = new Suplies($ligne["idappro"], $ligne["datea"], $ligne["idfour"]);
        }
        return $lst2;
    }
    function addSuply($idappro, $datea, $idfour)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO appro (idappro,datea, idfour) VALUES (?,?,?);");
        $res->execute(array($idappro, $datea, $idfour));
    }
    function getSup($idappro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM appro where idappro=?;");
        $res->execute(array($idappro));

        if ($ligne = $res->fetch()) {
            return new Suplies($ligne["idappro"], $ligne["datea"], $ligne["idfour"]);
        }
        return null;
    }
    function updateSup($datea, $idfour, $idappro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("UPDATE appro SET datea=?,idfour=? WHERE idappro=?; ");
        $res->execute(array($datea, $idfour, $idappro));
    }
    function deleteSup($idappro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" DELETE FROM appro WHERE idappro=?; ");
        $res->execute(array($idappro));
    }

    ////////////////////////////////////////// Deatils section /////////////////////////////////////////////////////////////////
    function showDetails($idappro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("SELECT * FROM maj_stock WHERE idappro=?;");
        $res->execute(array($idappro));
        $lst2 = [];
        while ($ligne = $res->fetch()) {
            $lst2[] = new suplyDetail($ligne["idpro"], $ligne["idappro"], $ligne["qta_pro"]);
        }
        return $lst2;
    }
    function deleteDetail($idappro, $idpro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare(" DELETE FROM maj_stock WHERE idappro=? AND idpro=?; ");
        $res->execute(array($idappro, $idpro));
    }
    function addADetail($idpro, $idappro, $qta_pro)
    {
        $pdo = $this->getPDO();
        $res = $pdo->prepare("INSERT INTO maj_stock values (?,?,?)");
        $res->execute(array($idpro, $idappro, $qta_pro));
    }
}
