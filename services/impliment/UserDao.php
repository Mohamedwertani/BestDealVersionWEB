<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDao
 *
 * @author King
 */
class UserDao extends AbstractDao {

    public function create($user) {
         try {
            $dbh = new PDO('mysql:host=localhost;dbname=bestdealdb', 'root', '');

            $requete = $dbh->prepare("insert into user(`firstName`, `lastName`, `login`, `pwd`) values('" . $user->firstName . "','" . $user->lastName . "','" . $user->login . "','" . $user->pwd . "')");
            $requete->execute();
            echo 'create';
            return true;
        } catch (Exception $e) {
//            $dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function deletAll() {
        
    }

    public function delete($newObj) {
        
    }

    public function liste() {
        
    }

    public function oneResutlt($newObj) {
        
    }

    public function update($newObj) {
             try {
            $dbh = new PDO('mysql:host=localhost;dbname=bestdealdb', 'root', '');

            $requete = $dbh->prepare("update user set firstName = " . $user->firstName . ", lastName = " . $user->lastName . ", pwd = " . $user->pwd . " where login = " . $user->login . "");
            $requete->execute();
            echo 'create';
            return true;
        } catch (Exception $e) {
//            $dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

//put your code here
}
