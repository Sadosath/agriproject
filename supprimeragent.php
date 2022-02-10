<?php

global $db;
session_start();
$idagent=$_GET['idagent'];
$sql=$db ->query("DELETE FROM agent WHERE ID_AGENT='$idagent'");
$req = $db->prepare($sql);
$req->execute();
?>

if(isset($_GET['agents'])){ ;
$idprefec = $_GET['idprefec'];
$idadmin = $_SESSION['idadmin'];
$nomagent = $_GET['nomagent'];
$prenomagent = $_GET['prenomagent'];
$numero = htmlspecialchars(trim($_GET['numero']));
$password = $_GET['password'];
$sexe = $_GET['sexe'];

global $db;
$sql=$db ->query("DELETE FROM agent WHERE ID_AGENT=agents");
$req = $db->prepare($sql);
$req->execute();
?>