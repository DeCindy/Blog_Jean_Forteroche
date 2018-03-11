<?php
require('controller/frontend.php');

try
{
	if(isset($_GET['action']))
	{
		if($_GET['action'] == 'listChapitre')
		{
			listChapitre();
		}
		elseif ($_GET['action'] == 'chapitreView')
		{
			chapitreView();
		}
	}
	else
	{
		listChapitre();
	}
}
catch(Exception $e) 
{
	echo 'Erreur :' . $e->getMessage();
}