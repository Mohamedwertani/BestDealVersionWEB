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
                try {
            $dbh = new PDO('mysql:host=localhost;dbname=bestdealdb', 'root', '');

            $requete = $dbh->prepare("delete from user");
            $requete->execute();
            echo 'create';
            return true;
        } catch (Exception $e) {
//            $dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function delete($user) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=bestdealdb', 'root', '');

            $requete = $dbh->prepare("delete from user where login =" . $user->login . "");
            $requete->execute();
            echo 'create';
            return true;
        } catch (Exception $e) {
//            $dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function liste() {
        
    }

    public function oneResutlt($newObj) {
        
    }
function connect($login,$password){    
        $requet = "select * from user where login='".$login."' and password='".$password."'";
            $requet1 = mysql_query($requet) or die (mysql_error());
            $data = mysql_num_rows($requet1);
            if (isset($data['login'])&!empty($data['login'])&&isset($data['password'])&!empty($data['password'])) {
                $_SESSION['login']=$data['login'];
                 $_SESSION['password']=$data['password'];
                 header("Location:home.php");
        } 
            else {
                echo 'reverifier votre login et mot de passe ';
            }
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

 }
