<?php

include($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/services/impliment/categoriedao.php');
include ($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/domain/categorie.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoieDaoTest
 *
 * @author King
 */
class categorieDaoTest {

    private $categorieDao;

    public function test() {
        $cat = new Categorie('Car');
//echo $cat->getName();
//$cat->setName('jeux');
//echo $cat->getName();
        $catDao = new CategorieDao();
//$catDao->create($cat);
//$catDao->delete($cat);
//$catDao->update($cat);
        $oneResutlt = $catDao->oneResutlt($cat);
        $catDao->liste();
    }

}
$test = new categorieDaoTest();
$test->test();
