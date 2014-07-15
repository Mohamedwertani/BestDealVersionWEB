<?php

include($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/services/impliment/categoriedao.php');
include ($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/domain/User.php');
include($_SERVER["DOCUMENT_ROOT"] . '/NetBeansProjectsPhp/BestDealVersionWEB/BestDealVersionWEB/services/AbstractDao.php');
session_start();

$user = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['mdp']);
$requette1="select * from user
where login='".$user->getLogin()."'";
$data=mysql_query ( $requette1 ) or die (mysql_error ());
$nb=mysql_num_rows($data);
if($nb==0)
{
$requette="insert into user
(
firstName , 
lastName , 
login , 
pwd  )
values 
(
'".$user->getFirstName()."' , 
'".$user->getLastName()."' , 
'".$user->getLogin()."' , 
'".$user->getPwd()."'
) ";

echo $requette ."<br>";
mysql_query ( $requette ) or die (mysql_error ());
$_SESSION["msg_confirmation"]='<font color=green >utilisateur ajouté avec succès</font>';
} 
else
	{
		$_SESSION["msg_confirmation"]='<font color=red>utilisateur existe déja </font>';
	}
header('Location:Home.php');
?>