<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Deal
 *
 * @author King
 */
class Deal {

    private $id;
    private $name;
    private $desc;
    private $price;
    private $category;
    private $owner;
    private $startDate;
    private $duration;

    function __construct( $name, $desc, $price, $category, $owner, $startDate, $duration) {
 
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->category = $category;
        $this->owner = $owner;
        $this->startDate = $startDate;
        $this->duration = $duration;
    }

        public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDesc() {
        return $this->desc;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setOwner($owner) {
        $this->owner = $owner;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    public function setDuration($duration) {
        $this->duration = $duration;
    }

    public function actionEnabled() {

//               $currentDate = new DateTime('today'); ;

        $expirationDate = new DateTime('today +0 year +0 months +0 days +' . $this->duration . ' minute +0 seconds');

//        echo $currentDate;
        echo $expirationDate->format('H:i:s');
    }

}
//
//$deal = new Deal('5', 'name', 'desc', 'price', 'category', 'owner');
//$deal->actionEnabled();
