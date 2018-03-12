<?php

require_once('model/ChapterManager.php');

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

	require('view/frontend/chapterView.php');
}