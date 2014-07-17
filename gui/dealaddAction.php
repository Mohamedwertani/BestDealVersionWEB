<?php
echo $_POST['name'];
include("../services/impliment/dealdao.php");
include_once '../domain/deal.php'; 



$deal  = new Deal($_POST['name'], $_POST['desc'], $_POST['price'], $_POST['category'], $_POST['owner'], $_POST['startDate'], $_POST['duration']);
$dealdao = new DealDao();
$dealdao->create($deal);
 
header ('location:home.php');



?>
