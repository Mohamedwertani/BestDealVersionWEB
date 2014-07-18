<?php

include ($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/domain/deal.php');
include ($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/services/abstractdao.php');
//include'../abstractdao.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DealDao
 *
 * @author King
 */
class DealDao extends AbstractDao {

    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        try {
            $querySelect = "SELECT * FROM deal";
            $resultSet = $this->dbh->query($querySelect);
            return $resultSet;
//            if ($resultSet->num_rows > 0) {
//                while ($row = $resultSet->fetch_object()) {
//                    foreach ($row as $fieldValue) {
//                        $bigString .= "<em>$fieldValue</em><br />\n";
//                    }
//                    $bigString .= "<hr />";
//                }
            $this->dbh->close();
//                echo $bigString;
//            }
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function listePerso($user) {
        try {
            $querySelect = "SELECT * FROM deal where owner = '" . $user->getLogin() . "' ";
            $resultSet = $this->dbh->query($querySelect);
            return $resultSet;
//            if ($resultSet->num_rows > 0) {
//                       return $resultSet;
//                }
            $this->dbh->close();
//                echo $bigString;
//            }
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function listeCategorie() {
        try {
            $querySelect = "SELECT category FROM deal";
            $resultSet = $this->dbh->query($querySelect);
            return $resultSet;
//            if ($resultSet->num_rows > 0) {
//                while ($row = $resultSet->fetch_object()) {
//                    foreach ($row as $fieldValue) {
//                        $bigString .= "<em>$fieldValue</em><br />\n";
//                    }
//                    $bigString .= "<hr />";
//                }
            $this->dbh->close();
//                echo $bigString;
//            }
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function create($deal) {
        try {
            echo $deal->getName();
            echo $deal->getDesc();
            echo $deal->getPrice();
            echo $deal->getOwner();
            echo $deal->getCategory();
            echo $deal->getStartDate();
            echo $deal->getDuration();
            $name = $deal->getName();
            $desc = $deal->getDesc();
            $price = $deal->getPrice();
            $owner = $deal->getOwner();
            $category = $deal->getCategory();
            $startDate = $deal->getStartDate();
            $duration = $deal->getDuration();



            $query = "INSERT INTO deal ( name,  desc,  price,  category,  owner,  startDate,  duration) VALUES ( ?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($this->dbh, $query);
//            $stmt->bind_param($deal->getName(), $deal->getDesc()    ,  $deal->getPrice() ,   $deal->getCategory() , $deal->getOwner() ,  $deal->getStartDate() , $deal->getDuration() );
// $stmt->bind_param('informatique'););
//            $stmt = $this->dbh->stmt_init();
//            $stmt->prepare("INSERT INTO deal ( name,  desc,  price,  category,  owner,  startDate,  duration) VALUES ('" . $deal->getName() . "','" . $deal->getDesc() . "','" . $deal->getPrice() . "','" . $deal->getCategory() . "','" . $deal->getOwner() . "','" . $deal->getStartDate() . "','" . $deal->getDuration() . "')");
//            $query = "INSERT INTO deal ( name,  desc,  price,  category,  owner,  startDate,  duration) VALUES ('" . $deal->getName() . "','" . $deal->getDesc() . "','" . $deal->getPrice() . "','" . $deal->getCategory() . "','" . $deal->getOwner() . "','" . $deal->getStartDate() . "','" . $deal->getDuration() . "')";
//            $this->dbh->exec($query);
// $stmt->bind_param('informatique');
            mysqli_stmt_bind_param($stmt, "ssissii", $name, $desc, $price, $category, $owner, $startDate, $duration);
            mysqli_stmt_execute($stmt);
            //            $this->dbh->close();
//            mysqli_stmt_close($stmt);
        } catch (PDOException $e) {
//            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
            echo 'requete Plante';
        }
    }

    public function deletAll() {
        try {
            $stmt = $this->dbh->prepare("DELETE FROM deal");
//   $stmt->bind_param("informatique");
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function delete($deal) {
        try {

            $stmt = $this->dbh->prepare("DELETE FROM deal WHERE  name='" . $deal->getId() . "'");
//   $stmt->bind_param("informatique");
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function oneResutlt($deal) {
        try {
            $stmt = $mysqli->prepare("select * from deal where name = '" . $deal->getName() . "'");
// $stmt->bind_param('s',$email);
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

    public function update($deal) {
        try {
//update
            $stmt = $mysqli->prepare("UPDATE deal SET name= '" . $deal->getName() . "' WHERE  name='" . $deal->getName() . "'");
// $stmt->bind_param('s',$email);
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            $this->dbh->rollBack();
            echo "Failed: " . $e->getMessage();
        }
    }

}

//$deal = new Deal( ' name', ' desc', 200, ' category', '200' );
//
//$dealDao = new DealDao();
//$dealDao->liste($deal);
?>