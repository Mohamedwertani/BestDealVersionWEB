<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author King
 */
class User {

    private $firstName;
    private $lastName;
    private $login;
    private $pwd;

    function __construct($firstName, $lastName, $login, $pwd) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->pwd = $pwd;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPwd($pwd) {
        $this->pwd = $pwd;
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

}
