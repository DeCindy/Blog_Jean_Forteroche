<?php

if($_GET)
{
	$request = $_GET['action'];
}
else
{
	$request = "";
}

require_once('classes/Routeur.php');

$routeur = new Routeur($request);
$routeur->renderController();