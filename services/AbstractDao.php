<?php

//include ($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/utilities/connexionbd.php');

/**
 * Description of AbstractDao
 *
 * @author King
 */
abstract class AbstractDao {

    protected $dbh;

    function __construct() {
//        $this->dbh = new ConnexionBd();
//        echo 'bonjours';
//
        $this->dbh = new PDO('mysql:host=localhost;bdname=bestdealdb', 'root', '');
//        $this->dbh = $dbha;
    }

    public abstract function liste();

    public abstract function oneResutlt($newObj);

    public abstract function create($newObj);

    public abstract function update($newObj);

    public abstract function delete($newObj);

    abstract function deletAll();
}

?>