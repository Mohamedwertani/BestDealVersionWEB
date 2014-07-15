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
	

}
