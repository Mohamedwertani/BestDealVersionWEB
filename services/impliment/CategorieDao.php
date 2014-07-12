<?php

include ($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/domain/categorie.php');

include'../abstractdao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategorieDao
 *
 * @author King
 */
class CategorieDao extends AbstractDao {

    public function create($categorie) {

        try {

            $requete = $this->dbh->prepare("insert into category(`name`) values ('" . $categorie->getName() . "')");
            $requete->execute();
            echo 'create';
            return true;
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function delete($categorie) {
        try {

            $requete = $this->dbh->prepare("delete from category where name ='" . $categorie->getName() . "'");
            $requete->execute();
            echo 'delete';
            return true;
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function deletAll() {
        try {

            $requete = $this->dbh->prepare("  delete from category");
            $requete->execute();
            echo 'delete all';
            return true;
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function update($categorie) {
        try {

            $requete = $this->dbh->prepare("update category set name = '" . $categorie->getName() . "' where name = '" . $categorie->getName() . "'");
            $requete->execute();
            echo 'update';
            return true;
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function liste() {
        try {
             $requete = $this->dbh->prepare("select * from category");
            if ($requete->execute(array($_GET['name']))) {
                while ($row = $requete->fetch()) {
                    print_r($row['name']);
                    echo '<br/>  <br/>';
                }
            }
            echo '<br/>liste <br/>';
//            return true;
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function oneResutlt($categorie) {
        try {

            $requete = $this->dbh->prepare("select * from category  WHERE name ='" . $categorie->getName() . "'");
            if ($requete->execute(array($_GET['name']))) {
                while ($row = $requete->fetch()) {
                    print_r($row['name']);
                    echo '<br/>  <br/>';
                }
            } else {
                echo 'pas de resultat';
            }
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

}

$cat = new Categorie('Car');
//echo $cat->getName();
//$cat->setName('jeux');
//echo $cat->getName();
$catDao = new CategorieDao();
$catDao->create($cat);
//$catDao->delete($cat);
//$catDao->update($cat);
//$oneResutlt = $catDao->oneResutlt($cat);
$catDao->liste();
?>
