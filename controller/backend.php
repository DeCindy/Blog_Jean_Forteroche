<?php

require_once('model/CommentManager.php');
require_once('model/ChapterManager.php');

class Backend 
{
	public function adminView()
	{
		require('view/backend/adminView.php');
	}

	public function writeChapter()
	{
		require('view/backend/writeView.php');
	}

	public function validateDelete()
	{
		if (isset($_GET['id']))
		{
			require('view/backend/validateDeleteView.php');
		}
		else
		{
			throw new Exception(' aucun identifiant de billet envoyé');
		}
	}

	public function editChapter()
	{
		$chapterManager = new Blog\Model\ChapterManager();
		$chapters = $chapterManager->getChapters();

		require('view/backend/editChapterView.php');
	}

	public function addChapter()
	{
		if (!empty($_POST['content']) && !empty($_POST['title']))
		{
			$chapterManager = new Blog\Model\ChapterManager();
			$affectedLines = $chapterManager->addChapter($_POST['content'], $_POST['title']);

			if ($affectedLines === false) 
			{
				throw new Exception(' impossible d\'ajouter le chapitre !');
			}
			else
			{
				header('location: index.php?action=editChapter');
			}
		}
		else
		{
			throw new Exception(' tous les champs ne sont pas remplis !');
		}
	}

	public function deleteChapter()
	{
		if (isset($_GET['id']))
		{
			$chapterManager = new Blog\Model\ChapterManager();
			$delete = $chapterManager->deleteChapter($_GET['id']);

			if ($delete === false) 
			{
				throw new Exception(' impossible d\'effacer le chapitre !');
			}
			else
			{
				header('location: index.php?action=editChapter');
			}
		}
		else
		{
			throw new Exception(' aucun identifiant de billet envoyé');
		}
	}

	public function changeChapter()
	{
		if (isset($_GET['id']))
		{
			$chapterManager = new Blog\Model\ChapterManager();
			$chapter = $chapterManager->getChapter($_GET['id']);

			require('view/backend/writeView.php');
		}
		else
		{
			throw new Exception(' aucun identifiant de billet envoyé');
		}
	}

	public function updateChapter()
	{
		if (isset($_GET['id']) && !empty($_POST['content']) && !empty($_POST['title']))
		{
			$chapterManager = new Blog\Model\ChapterManager();
			$update = $chapterManager->updateChapter($_GET['id'], $_POST['content'], $_POST['title']);

			if ($update === false) 
			{
				throw new Exception(' impossible de modifier le chapitre !');
			}
			else
			{
				header('location: index.php?action=editChapter');
			}
		}
		else
		{
			throw new Exception(' tous les champs ne sont pas remplis !');
		}
	}

	public function manageComments()
	{
		$commentManager = new Blog\Model\CommentManager();
		$comments = $commentManager->getAllComments();

		$test = $commentManager->testReport();
		$report = $commentManager->getReport();

		require('view/backend/manageCommentsView.php');
	}

	public function deleteComment()
	{
		if (isset($_GET['id']))
		{
			$commentManager = new Blog\Model\CommentManager();
			$delete = $commentManager->deleteComment($_GET['id']);

			if ($delete === false) 
			{
				throw new Exception(' impossible d\'effacer le commentaire !');
			}
			else
			{
				header('location: index.php?action=manageComments');
			}
		}
		else
		{
			throw new Exception(' aucun identifiant de billet envoyé');
		}
	}

	public function changeComment()
	{
		if (isset($_GET['id']))
		{
			$commentManager = new Blog\Model\CommentManager();
			$comment = $commentManager->getComment($_GET['id']);

			require('view/backend/writeView.php');
		}
		else
		{
			throw new Exception(' aucun identifiant de billet envoyé');
		}
	}

	public function updateComment()
	{
		if (isset($_GET['id']) && !empty($_POST['comment']))
		{
			$commentManager = new Blog\Model\CommentManager();
			$update = $commentManager->updateComment($_GET['id'], $_POST['comment']);

			if ($update === false) 
			{
				throw new Exception(' impossible de modifier le chapitre !');
			}
			else
			{
				header('location: index.php?action=manageComments');
			}
		}
		else
		{
			throw new Exception(' tous les champs ne sont pas remplis !');
		}
	}
}