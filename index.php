<?php
require('controller/frontend.php');

try
{
	if(isset($_GET['action']))
	{
		if($_GET['action'] == 'home')
		{
			home();
		}
		elseif ($_GET['action'] == 'chapterView')
		{
			if(isset($_GET['id']) && $_GET['id'] > 0 && $_GET['id'] <= $_GET['idmax'])
			{
				chapterView();
			}
			else
			{
				throw new Exception(' aucun identifiant de billet envoyé');
			}
		}
	}
	else
	{
		home();
	}
}
catch(Exception $e) 
{
	echo 'Erreur :' . $e->getMessage();
}