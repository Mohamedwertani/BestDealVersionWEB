<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connexionBd
 *
 * @author King
 */
class ConnexionBd {

    private $dbh;

    public function getDbh() {
        return $this->dbh;
    }

    function __construct() {
        
    }

    public function connexion($db) {
        try {
            $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            $db = new PDO('mysql:host=localhost;bdname=bestdealdb', 'root', '',$pdo_options);
            $this->dbh = $db;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
