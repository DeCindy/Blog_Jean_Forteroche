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
					if(strlen($_POST['comment']) < 500)
					{
						addComment($_GET['id'], $_GET['idmax'], htmlspecialchars($_POST['author']), nl2br(htmlspecialchars($_POST['comment'])));
					}
					else
					{
						throw new Exception(' votre commentaire ne doit pas dépasser 500 caractères !');
					}
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
		elseif ($_GET['action'] == 'reportComment')
		{
			if (isset($_GET['id']) && $_GET['idchapter'] && $_GET['idmax'])
			{
				reportComment($_GET['id'], $_GET['idchapter'], $_GET['idmax']);
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
					controlLogin($_POST['email'], sha1($_POST['pwd']));
				}
				else
				{
					throw new Exception(' tous les champs ne sont pas remplis !');
				}
		}
		elseif ($_GET['action'] == '')
		{
			home();
		}
		// ADMIN
		else
		{
			if (isset($_SESSION['login']))
			{
				if ($_GET['action'] == 'adminView')
				{
					adminView();
				}
				elseif ($_GET['action'] == 'editChapter')
				{
					editChapter();
				}
				elseif ($_GET['action'] == 'writeChapter')
				{
					writeChapter();
				}
				elseif ($_GET['action'] == 'manageComments')
				{
					manageComments();
				}
				elseif ($_GET['action'] == 'addChapter')
				{
					if (!empty($_POST['content']) && !empty($_POST['title']))
					{
						addChapter($_POST['content'], $_POST['title']);
					}
					else
					{
						throw new Exception(' tous les champs ne sont pas remplis !');
					}
				}
				elseif ($_GET['action'] == 'validateDelete')
				{
					if (isset($_GET['id']))
					{
						validateDelete();
					}
					else
					{
						throw new Exception(' aucun identifiant de billet envoyé');
					}
				}
				elseif ($_GET['action'] == 'deleteChapter')
				{
					if (isset($_GET['id']))
					{
						deleteChapter($_GET['id']);
					}
					else
					{
						throw new Exception(' aucun identifiant de billet envoyé');
					}
				}
				elseif ($_GET['action'] == 'changeChapter')
				{
					if (isset($_GET['id']))
					{
						changeChapter($_GET['id']);
					}
					else
					{
						throw new Exception(' aucun identifiant de billet envoyé');
					}
				}
				elseif ($_GET['action'] == 'updateChapter')
				{
					if (isset($_GET['id']) && !empty($_POST['content']) && !empty($_POST['title']))
					{
						updateChapter($_GET['id'], $_POST['content'], $_POST['title']);
					}
					else
					{
						throw new Exception(' tous les champs ne sont pas remplis !');
					}
				}
				elseif ($_GET['action'] == 'deleteComment')
				{
					if (isset($_GET['id']))
					{
						deleteComment($_GET['id']);
					}
					else
					{
						throw new Exception(' aucun identifiant de billet envoyé');
					}
				}
				elseif ($_GET['action'] == 'changeComment')
				{
					if (isset($_GET['id']))
					{
						changeComment($_GET['id']);
					}
					else
					{
						throw new Exception(' aucun identifiant de billet envoyé');
					}
				}
				elseif ($_GET['action'] == 'updateComment')
				{
					if (isset($_GET['id']) && !empty($_POST['comment']))
					{
						updateComment($_GET['id'], $_POST['comment']);
					}
					else
					{
						throw new Exception(' tous les champs ne sont pas remplis !');
					}
				}
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
	error($e);
}