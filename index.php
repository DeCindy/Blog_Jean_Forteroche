<?php
session_start ();

require('controller/frontend.php');
require('controller/backend.php');

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
		elseif ($_GET['action'] == 'addComment')
		{
			if (isset($_GET['id']) && $_GET['id'] > 0) 
			{
				if (!empty($_POST['author']) && !empty($_POST['comment']))
				{
					addComment($_GET['id'], $_GET['idmax'], $_POST['author'], $_POST['comment']);
				}
				else
				{
					throw new Exception(' tous les champs ne sont pas remplis !');
				}
			}
			else
			{
				throw new Exception(' aucun identifiant de billet envoyé');
			}
		}
		elseif ($_GET['action'] == 'loginView')
		{
			loginView();
		}
		elseif ($_GET['action'] == 'controlLogin')
		{
			if (!empty($_POST['email']) && !empty($_POST['pwd']))
				{
					controlLogin($_POST['email'], $_POST['pwd']);
				}
				else
				{
					throw new Exception(' tous les champs ne sont pas remplis !');
				}
		}
		elseif ($_GET['action'] == 'adminView')
		{
			if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) 
			{
				adminView();
			}
			else
			{
				throw new Exception(' vous n\'avez pas accès, veuillez vous connecter');
			}
		}
		elseif ($_GET['action'] == 'editChapter')
		{
			if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) 
			{
				editChapter();
			}
			else
			{
				throw new Exception(' vous n\'avez pas accès, veuillez vous connecter');
			}
		}
		elseif ($_GET['action'] == 'manageComments')
		{
			if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) 
			{
				manageComments();
			}
			else
			{
				throw new Exception(' vous n\'avez pas accès, veuillez vous connecter');
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
	echo '<br/>Vous allez être redirigé dans 5 secondes';
	echo '<META HTTP-EQUIV="Refresh" CONTENT="5;index.php?action=home">';

}