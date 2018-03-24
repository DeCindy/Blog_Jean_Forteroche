<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/LoginManager.php');

class Frontend 
{
	public function home()
	{
		$chapterManager = new Blog\Model\ChapterManager();
		$chapters = $chapterManager->getChapters();
		$maxId = $chapterManager->getMaxId();

		require('view/frontend/home.php');
	}

	public function chapterView()
	{
		if(isset($_GET['id']) && $_GET['id'] > 0 && $_GET['id'] <= $_GET['idmax'])
		{
			$chapterManager = new Blog\Model\ChapterManager();
			$chapter = $chapterManager->getChapter($_GET['id']);

			$commentManager = new Blog\Model\CommentManager();
			$comments = $commentManager->getComments($_GET['id']);

			require('view/frontend/chapterView.php');
		}
		else
		{
			throw new Exception(' aucun identifiant de billet envoyé');
		}
	}

	public function addComment()
	{
		if (isset($_GET['id']) && $_GET['id'] > 0) 
		{
			if (!empty($_POST['author']) && !empty($_POST['comment']))
			{
				if(strlen($_POST['comment']) < 500)
				{
					$commentManager = new Blog\Model\CommentManager();
					$affectedLines = $commentManager->chapterComment($_GET['id'], htmlspecialchars($_POST['author']), nl2br(htmlspecialchars($_POST['comment'])));

					if ($affectedLines === false) 
					{
						throw new Exception('impossible d\'ajouter le commentaire !');
					}
					else
					{
						header('location: index.php?action=chapterView&id=' . $_GET['id'] . '&idmax=' . $_GET['idmax']);
					}
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

	public function reportComment()
	{
		if (isset($_GET['id']) && $_GET['idchapter'] && $_GET['idmax'])
		{
			$commentManager = new Blog\Model\CommentManager();
			$report = $commentManager->reportComment($_GET['id']);

			header('location: index.php?action=chapterView&id=' . $_GET['idchapter'] . '&idmax=' . $_GET['idmax']);
		}
		else
		{
			throw new Exception(' aucun identifiant de billet envoyé');
		}
	}

	public function loginView()
	{
		require('view/backend/loginView.php');
	}

	public function controlLogin()
	{
		if (!empty($_POST['email']) && !empty($_POST['pwd']))
		{
			$loginManager = new Blog\Model\LoginManager();
			$login = $loginManager->getLogin($_POST['email'], sha1($_POST['pwd']));

			if (!empty($login)) 
			{
				session_start();
				$_SESSION['login'] = $login['id'];
				header('location: index.php?action=adminView');
			}
			else
			{
				throw new Exception(' membre non reconnu');
			}
		}
		else
		{
			throw new Exception(' tous les champs ne sont pas remplis !');
		}
	}

	public function error($e)
	{
		$messageError = $e->getMessage();
		
		require ('view/frontend/errorView.php');
	}
}