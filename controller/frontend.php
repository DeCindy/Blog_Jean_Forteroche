<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');

function home()
{
	$chapterManager = new Blog\Model\ChapterManager();
	$chapters = $chapterManager->getChapters();
	$maxId = $chapterManager->getMaxId();

	require('view/frontend/home.php');
}

function chapterView()
{
	$chapterManager = new Blog\Model\ChapterManager();
	$chapter = $chapterManager->getChapter($_GET['id']);

	$commentManager = new Blog\Model\CommentManager();
	$comments = $commentManager->getComments($_GET['id']);

	require('view/frontend/chapterView.php');
}

function addComment($chapterId, $idmax, $author, $comment)
{
	$commentManager = new Blog\Model\CommentManager();
	$affectedLines = $commentManager->chapterComment($chapterId, $author, $comment);

	if ($affectedLines === false) 
	{
		throw new Exception('impossible d\'ajouter le commentaire !');
	}
	else
	{
		header('location: index.php?action=chapterView&id=' . $chapterId . '&idmax=' . $idmax);
	}
}