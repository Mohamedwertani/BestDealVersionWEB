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

    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        try {
            $querySelect = "SELECT * FROM category";
            $resultSet = $this->dbh->query($querySelect);

            if ($resultSet->num_rows > 0) {
                while ($row = $resultSet->fetch_assoc()) {
                    foreach ($row as $fieldValue) {
                        $bigString .= "<em>$fieldValue</em><br />\n";
                    }
                    $bigString .= "<hr />";
                }
                $this->dbh->close();
                echo $bigString;
            }
 
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function create($categorie) {
        try {

            $stmt = $this->dbh->prepare("INSERT INTO category (name) VALUES ('" . $categorie->getName() . "')");
            // $stmt->bind_param('informatique');
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function deletAll() {
        try {
            $stmt = $this->dbh->prepare("DELETE FROM category  ");
//   $stmt->bind_param("informatique");
            $stmt->execute();
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function delete($categorie) {
        try {

            $stmt = $this->dbh->prepare("DELETE FROM category WHERE  name='" . $categorie->getName() . "'");
//   $stmt->bind_param("informatique");
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function oneResutlt($categorie) {
        try {
            $querySelect= "select * from category where name = '" . $categorie->getName() . "'";
             $resultSet = $this->dbh->query($querySelect);

            if ($resultSet->num_rows > 0) {
                while ($row = $resultSet->fetch_assoc()) {
                    foreach ($row as $fieldValue) {
                        $bigString .= "<em>$fieldValue</em><br />\n";
                    }
                    $bigString .= "<hr />";
                }
                $this->dbh->close();
                echo $bigString."Element Trouver";
            }else {
                echo'pas de resultat trouver ';
            }
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function update($categorie) {
        try {
            //update
            $stmt = $mysqli->prepare("UPDATE category SET name= '" . $categorie->getName() . "' WHERE  name='" . $categorie->getName() . "'");
            // $stmt->bind_param('s',$email);
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

}

$cat = new Categorie('Cars');
//echo $cat->getName();
//$cat->setName('jeux');
//echo $cat->getName();
$catDao = new CategorieDao();
//$catDao->create($cat);
//$catDao->delete($cat);
//$catDao->update($cat);
$oneResutlt = $catDao->oneResutlt($cat);
//$catDao->liste();
?>
