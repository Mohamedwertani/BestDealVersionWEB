 
<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categorie
 *
 * @author King
 */
class Categorie {
    private $name ;
    
//    function __construct() {
//     } 
    function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


 }
?>
 