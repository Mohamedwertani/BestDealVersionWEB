<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php
$con = new ConnexionDb();
$con->connexion();
session_start();


?>
<h1><center>Best Deal</center></h1>
<?php
if(isset($_SESSION["msg_confirmation"]))
{
echo $_SESSION["msg_confirmation"];
unset($_SESSION["msg_confirmation"]);
}
?>
 <div id="inscription">
 <h3>Authentication</h3>
<form method="post" action="login.php">
<table>
<tr>
<th>Name</th><th><input type ="text"name="login" id="login" ></th>
</tr>
<tr>
<th>Description</th><th><input type="password" name="password" id="password" ></th>
</tr>
</table>
<input type="submit" value="connexion">
</form>
<div>
</body>
</html>