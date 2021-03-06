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

        try {
            $this->dbh = mysqli_connect("localhost", "root", "", "bestdealdb");
            if (mysqli_connect_errno()) {
                printf("Erreur de connexion : %s\n", mysqli_connect_error());
                exit();
            }
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage() . '<br />';
            echo 'N° : ' . $e->getCode();
             exit();
        }
    }

    public abstract function liste();

    public abstract function oneResutlt($newObj);

    public abstract function create($newObj);

    public abstract function update($newObj);

    public abstract function delete($newObj);

    abstract function deletAll();
}

?>