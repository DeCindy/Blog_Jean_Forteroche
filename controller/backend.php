<?php

require_once('model/ChapterManager.php');
require_once('model/LoginManager.php');

function loginView()
{
	require('view/backend/loginView.php');
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

function adminView()
{
	require('view/backend/adminView.php');
}

function editChapter()
{
	$chapterManager = new Blog\Model\ChapterManager();
	$chapters = $chapterManager->getChapters();

	require('view/backend/editChapterView.php');
}

function manageComments()
{
	require('view/backend/manageCommentsView.php');
}

function writeChapter()
{
	require('view/backend/writeChapterView.php');
}

function addChapter($content, $title)
{
	$chapterManager = new Blog\Model\ChapterManager();
	$affectedLines = $chapterManager->addChapter($content, $title);

	if ($affectedLines === false) 
	{
		throw new Exception('impossible d\'ajouter le chapitre !');
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

	if (empty($delete)) 
	{
		throw new Exception('impossible d\'effacer le chapitre !');
	}
	else
	header('location: index.php?action=editChapter');
}