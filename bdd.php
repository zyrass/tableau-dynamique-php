<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'admin', '') or die(print_r($bdd->errorInfo()));
	$bdd->exec('SET NAMES utf8');
}
catch(Exception $e)
{
	die('Erreur:'.$e->getMessage());
}
?>