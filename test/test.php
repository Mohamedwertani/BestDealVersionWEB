<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$date =  date("H:i:s");  
echo $date;


$today = new DateTime('today');
//echo 'Today is ', $today->format('F d, Y h:ia'), '.<br>', PHP_EOL;
//    // Today is August 28, 2013 12:00am.<br>
$expiration = new DateTime('today +1 year +2 months +16 days +61 minute +15 seconds');
echo 'Expires ', $expiration->format('F d, Y h:ia'), '.<br>', PHP_EOL;
    // Expires November 13, 2014 12:01am.<br>



      $dbh = mysqli_connect("localhost", "root", "", "bestdealdb");
            if (mysqli_connect_errno()) {
                printf("Erreur de connexion : %s\n", mysqli_connect_error());
                exit();
            }
        $dbh->query = "select * from category";
            // Affichage des résultats en HTML
            echo"Nombre de lignes affectées (SELECT):  \n" . $dbh->affected_rows;
?>
