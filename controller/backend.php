<?php

require_once('model/CommentManager.php');
require_once('model/ChapterManager.php');
require_once('model/LoginManager.php');

function loginView()
{
	require('view/backend/loginView.php');
}

function adminView()
{
	require('view/backend/adminView.php');
}

function writeChapter()
{
	require('view/backend/writeView.php');
}

function validateDelete()
{
	require('view/backend/validateDeleteView.php');
}

function controlLogin($emailUser, $pwdUser)
{
	$loginManager = new Blog\Model\LoginManager();
	$login = $loginManager->getLogin($emailUser, $pwdUser);

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

function editChapter()
{
	$chapterManager = new Blog\Model\ChapterManager();
	$chapters = $chapterManager->getChapters();

	require('view/backend/editChapterView.php');
}

function addChapter($content, $title)
{
	$chapterManager = new Blog\Model\ChapterManager();
	$affectedLines = $chapterManager->addChapter($content, $title);

	if ($affectedLines === false) 
	{
		throw new Exception(' impossible d\'ajouter le chapitre !');
	}
	else
	{
		header('location: index.php?action=editChapter');
	}
}

function deleteChapter($idChapter)
{
	$chapterManager = new Blog\Model\ChapterManager();
	$delete = $chapterManager->deleteChapter($idChapter);

	if ($delete === false) 
	{
		throw new Exception(' impossible d\'effacer le chapitre !');
	}
	else
	{
		header('location: index.php?action=editChapter');
	}
}

function changeChapter($idChapter)
{
	$chapterManager = new Blog\Model\ChapterManager();
	$chapter = $chapterManager->getChapter($idChapter);

	require('view/backend/writeView.php');
}

function updateChapter($idChapter, $contentChapter, $titleChapter)
{
	$chapterManager = new Blog\Model\ChapterManager();
	$update = $chapterManager->updateChapter($idChapter, $contentChapter, $titleChapter);

	if ($update === false) 
	{
		throw new Exception(' impossible de modifier le chapitre !');
	}
	else
	{
		header('location: index.php?action=editChapter');
	}
}

function manageComments()
{
	$commentManager = new Blog\Model\CommentManager();
	$comments = $commentManager->getAllComments();

	$test = $commentManager->testReport();
	$report = $commentManager->getReport();

	require('view/backend/manageCommentsView.php');
}

function deleteComment($idComment)
{
	$commentManager = new Blog\Model\CommentManager();
	$delete = $commentManager->deleteComment($idComment);

	if ($delete === false) 
	{
		throw new Exception(' impossible d\'effacer le commentaire !');
	}
	else
	{
		header('location: index.php?action=manageComments');
	}
}

function changeComment($idComment)
{
	$commentManager = new Blog\Model\CommentManager();
	$comment = $commentManager->getComment($idComment);

	require('view/backend/writeView.php');
}

function updateComment($idComment, $comment)
{
	$commentManager = new Blog\Model\CommentManager();
	$update = $commentManager->updateComment($idComment, $comment);

	if ($update === false) 
	{
		throw new Exception(' impossible de modifier le chapitre !');
	}
	else
	{
		header('location: index.php?action=manageComments');
	}
}